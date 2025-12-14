<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemIn;
use App\Models\ItemOut;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class GudangController extends Controller
{
    public function index(Request $request)
    {
        // search & filter
        $search = $request->get('search');
        $categoryFilter = $request->get('category');

        // query items
        $items = Item::with('category')
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('code', 'like', '%' . $search . '%')
                    ->orWhere('supplier', 'like', '%' . $search . '%');
                });
            })
            ->when($categoryFilter, function ($query, $categoryFilter) {
                $query->where('category_id', $categoryFilter);
            })
            ->orderBy('name', 'asc')
            ->get();
        
        // kategori untuk dropdown
        $categories = Category::all();

        // ajax response
        if ($request->ajax()) {
            return view('gudang.index', compact('items', 'categories'))->render();
        }

        // stok menipis
        $totalItems = Item::where('stock', '<=', 5)->count();

        return view('gudang.index' , compact('items','categories', 'totalItems'));
    }

    public function store(Request $request)
    {
        // Validasi Struktur Data Items
        $request->validate([
            'code' => 'required|unique:items',
            'name' => 'required',
            'supplier' => 'required',
            'unit' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Mengirim & Menyimpan Data
        Item::create($request->all());

        return redirect()->back()->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit($id) {
        // Memilih Data Items Menggunakan id
        $gudang = Item::find($id);

        return view('gudang/index', compact('gudang'));
    }

    public function update(Request $request, Item $items, $id) 
    {
        // Memilih Data Items Menggunakan id
        $items = Item::find($id);

        // Validasi Data Items
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'supplier' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        // Meng-Update Data yang di Input ke Dalam Database
        $items->update([
            'code' => $request->code,
            'name' => $request->name,
            'supplier' => $request->supplier,
            'stock' => $request->stock,
            'unit' => $request->unit,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);

        return redirect()->back();
    }

    public function destroy($id) {
        // Fitur Hapus Items
        $items = Item::findOrFail($id);

        $items->delete();

        return redirect()->route('gudang.index');
    }

    public function simpanBarangMasuk(Request $request)
    {
        // Validasi
        $request->validate([
            'item_id' => 'required|exists:items,id',
            'qty' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:0',
            'date' => 'required|date'
        ]);

        // Konversi Format Tanggal
        $formattedDate = \Carbon\Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');

        // Hitung Subtotal
        $subtotal = $request->qty * $request->price;

        // mengirim dan Menyimpan Data
        ItemIn::create([
            'item_id' => $request->item_id,
            'qty' => $request->qty,
            'price' => $request->price,
            'subtotal' => $subtotal,
            'date' => $formattedDate,
            'received_by'=> Auth::id(),
        ]);

        $item = Item::findOrFail($request->item_id);
        
        // Update Stock Item
        $item->increment('stock', $request->qty);

        return redirect()->back()->with('success', 'Barang masuk berhasil disimpan.');
    }

    public function service(Request $request)
    {
        // Ngambil Data Items
        $items=Item::all();

        // Fitur Search
        $search = $request->get('search');
        $services = Service::query()
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%$search%");
            })
            ->orderBy('name', 'asc')
            ->get();
        
        $categories = Category::orderBy('name', 'asc')->get(); 

        return view('gudang.service', compact('services', 'items', 'categories'));
    }

    public function serviceStore(Request $request)
    {
        // Validasi Data Service
        $request->validate([
            'name'=>'required',
            'price'=>'required',
        ]);

        // Mengirim dan Menyimpan Data Service
        Service::create([
            'name'  => $request->name,
            'price' => str_replace('.', '', $request->price),
        ]);

        return redirect()->back()->with('success', 'Service berhasil ditambahkan');
    }

    public function serviceEdit($id)
    {
        // Mencari Id
        $gudang = Service::find($id);

        return view('gudang/service', compact('gudang'));
    }

    public function serviceUpdate(Request $request, Service $services, $id)
    {
        // Mencari Id
        $services = Service::find($id);

        // Validasi Data Service
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        // Update Data Service
        $services->update([
            'name'  => $request->name,
            'price' => str_replace('.', '', $request->price),
        ]);

        return redirect()->back();
    }

    public function serviceDestroy($id) {
        // Fitur Hapus Data
        $service = Service::findOrFail($id);

        $service->delete();

        return redirect()->route('gudang.service');
    }

    public function categoryStore(Request $request)
    {
        // Validasi Data Category
        $request->validate([
            'name' => 'required',
        ]);

        // Mengirim dan Menyimpan Data Category
        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Category berhasil ditambahkan');
    }

    public function categoryEdit($id)
    {
        // Mencari Id Category
        $category = Category::findOrFail($id);

        return view('gudang.category-edit', compact('category'));
    }

    public function categoryUpdate(Request $request, $id)
    {
        // Mencari Id
        $category = Category::findOrFail($id);

        // Validasi Data Category
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Update Data Category
        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('gudang.service')
            ->with('success', 'Category berhasil diperbarui');
    }

    public function categoryDestroy($id) { 
        // Fitur Hapus Data Category
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('gudang.service');
    }

    public function notification()
    {
        // Fitur Stock Items Menipis
        $items = Item::where('stock', '<=', 5)->orderBy('stock', 'asc')->get();

        $totalItems = $items->count();
        $stockLow = $items->where('stock', '>', 0)->count();
        $stockEmpty = $items->where('stock', '=', 0)->count();

        return view('gudang.notification', compact('items', 'totalItems', 'stockLow', 'stockEmpty'));
    }

    public function laporanBarangMasuk(Request $request)
    {
        // FItur Barang Masuk
        $query = ItemIn::with('item');

        if ($request->has('filter')) {
            $filter = $request->filter;

            if ($filter === '7days') {
                $query->where('date', '>=', Carbon::now()->subDays(7));
            } elseif ($filter === '30days') {
                $query->where('date', '>=', Carbon::now()->subDays(30));
            } elseif ($filter === 'custom') {
                if ($request->filled('start') && $request->filled('end')) {
                    try {
                        $start = Carbon::createFromFormat('m/d/Y', $request->start)->startOfDay();
                        $end = Carbon::createFromFormat('m/d/Y', $request->end)->endOfDay();
                        $query->whereBetween('date', [$start, $end]);
                    } catch (\Exception $e) {
                        // Handle format error jika perlu
                    }
                } elseif ($request->filled('tanggal')) {
                    $query->whereDate('date', $request->tanggal);
                } elseif ($request->filled('bulan')) {
                    $query->whereMonth('date', $request->bulan);
                } elseif ($request->filled('tahun')) {
                    $query->whereYear('date', $request->tahun);
                }
            }
        }

        $riwayat = $query->orderBy('date', 'desc')->get();
        return view('gudang.laporan.barang-masuk', compact('riwayat'));
    }

    public function laporanBarangKeluar(Request $request)
    {
        // Fitur Barang Keluar
        $query = ItemOut::with(['item', 'transaction']);

        if ($request->has('filter')) {
            $filter = $request->filter;

            $query->whereHas('transaction', function ($q) use ($filter, $request) {
                if ($filter === '7days') {
                    $q->where('created_at', '>=', Carbon::now()->subDays(7));
                } elseif ($filter === '30days') {
                    $q->where('created_at', '>=', Carbon::now()->subDays(30));
                } elseif ($filter === 'custom') {
                    if ($request->filled('start') && $request->filled('end')) {
                        try {
                            $start = Carbon::createFromFormat('m/d/Y', $request->start)->startOfDay();
                            $end   = Carbon::createFromFormat('m/d/Y', $request->end)->endOfDay();
                            $q->whereBetween('created_at', [$start, $end]);
                        } catch (\Exception $e) {
                            
                        }
                    } elseif ($request->filled('tanggal')) {
                        $q->whereDate('created_at', $request->tanggal);
                    } elseif ($request->filled('bulan')) {
                        $q->whereMonth('created_at', $request->bulan);
                    } elseif ($request->filled('tahun')) {
                        $q->whereYear('created_at', $request->tahun);
                    }
                }
            });
        }

        $riwayat = $query->orderByDesc('id')->get();

        return view('gudang.laporan.barang-keluar', compact('riwayat'));
    }
}
