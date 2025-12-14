<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemOut;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\ServiceTransaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KasirController extends Controller
{
    public function index()
    {
        // Mengambil Data Items
        $items = Item::all();

        // Mengambil Data Service
        $services = Service::all();

        // Mengirim Data Ke View
        return view('kasir.index', compact('items', 'services'));
    }

    public function store(Request $request)
    {
        // Validasi Data Transaction
        $request->validate([
            'customer_name' => 'required|string',
            'mechanic_name' => 'nullable|string',
            'license_plate' => 'nullable|string',
            'vehicle_type' => 'nullable|string',
            'items' => 'nullable|string',
            'services' => 'nullable|string',
            'total' => 'required|numeric',
            'pay' => 'required|numeric',
            'change' => 'required|numeric',
        ]);

        $user = Auth::user();

        DB::beginTransaction();

        try {
            // Decode JSON
            $items = json_decode($request->input('items'), true);
            $services = json_decode($request->input('services'), true);

            
            // Simpan transaksi utama
            $transaction = Transaction::create([
                'user_id' => $user->id,
                'customer_name' => $request->customer_name,
                'mechanic_name' => $request->mechanic_name,
                'license_plate' => $request->license_plate,
                'vehicle_type' => $request->vehicle_type,
                'total' => $request->total,
                'pay' => $request->pay,
                'change' => $request->change,
            ]);

            // Simpan transaksi jasa
            if (!empty($services)) {
                foreach ($services as $service) {
                    ServiceTransaction::create([
                        'transaction_id' => $transaction->id,
                        'service_id' => $service['id'],
                        'qty' => $service['quantity'] ?? 1,
                        'price' => $service['price'],
                        'subtotal' => ($service['quantity'] ?? 1) * $service['price'],
                    ]);
                }
            }

            // Simpan transaksi barang
            if (!empty($items)) {
                foreach ($items as $item) {
                    ItemOut::create([
                        'transaction_id' => $transaction->id,
                        'item_id' => $item['id'],
                        'qty' => $item['quantity'],
                        'price' => $item['price'],
                        'subtotal' => $item['price'] * $item['quantity'],
                    ]);

                    // Update stok barang
                    $barang = Item::find($item['id']);
                    if ($barang) {
                        $barang->stock -= $item['quantity'];
                        $barang->save();
                    }
                }
            }

            DB::commit();

            return redirect()->back()->with('success', 'Transaksi berhasil disimpan!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal menyimpan transaksi. ' . $th->getMessage());
        }
    }

    public function searchItems(Request $request)
    {
        // Fitur Search Item
        $query = $request->get('search', '');
        $items = Item::where('name', 'like', "%{$query}%")
                ->orWhere('code', 'like', "%{$query}%")
                ->orWhere('supplier', 'like', "%{$query}%")
                ->get();

        $html = '';
        foreach ($items as $item) {
            $html .= '
                <tr class="h-14 bg-gray-100 border-b border-gray-300 hover:bg-gray-100">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input type="checkbox" class="selectable-checkbox h-5 w-5 bg-gray-300 hover:bg-gray-400 rounded-md"  
                                data-id="'.$item->id.'" 
                                data-name="'.$item->name_en.'" 
                                data-price="'.$item->price.'" 
                                data-type="item">
                        </div>
                    </td>
                    <th class="px-6 py-4 font-normal">'.$item->code.'</th>
                    <th class="px-6 py-4 font-normal capitalize">'.$item->name.'</th>
                    <th class="px-6 py-4 font-normal capitalize">'.$item->supplier.'</th>
                    <th class="px-6 py-4 font-normal capitalize">'.$item->category->name.'</th>
                    <th class="px-6 py-4 font-normal">Rp'.number_format($item->price, 0, ',', '.').'</th>
                </tr>
            ';
        }

        return response($html);
    }

    public function searchServices(Request $request)
    {
        // Fitur Search Service
        $query = $request->get('search', '');
        $services = Service::where('name', 'like', "%{$query}%")->get();

        $html = '';
        foreach ($services as $service) {
            $html .= '
                <tr class="h-14 bg-gray-100 border-b border-gray-300 hover:bg-gray-100">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input type="checkbox" class="selectable-checkbox h-5 w-5 bg-gray-300 hover:bg-gray-400 rounded-md" 
                                data-id="'.$service->id.'" 
                                data-name="'.$service->name.'" 
                                data-price="'.$service->price.'" 
                                data-type="service">
                        </div>
                    </td>
                    <th class="px-6 py-4 font-normal capitalize">'.$service->name.'</th>
                    <th class="px-6 py-4 font-normal">Rp'.number_format($service->price, 0, ',', '.').'</th>
                </tr>
            ';
        }

        return response($html);
    }
}
