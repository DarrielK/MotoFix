<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\ItemIn;
use App\Models\ItemOut;
use Carbon\CarbonPeriod;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke(Request $request)
    {
        $filter = $request->get('filter', 'today');

        [$startDate, $endDate] = $this->resolveDateFilter($filter, $request);

        $barangMasuk = ItemIn::whereBetween('date', [$startDate, $endDate])
            ->sum('qty');

        $barangKeluar = ItemOut::whereBetween('created_at', [$startDate, $endDate])
            ->sum('qty');

        $pemasukan = Transaction::whereBetween('created_at', [$startDate, $endDate])
            ->sum('total');

        $pengeluaran = ItemIn::whereBetween('date', [$startDate, $endDate])
            ->sum('subtotal');

        $totalItems = Item::count();
        $stockLow   = Item::where('stock', '<=', 5)->count();

        
        $period = CarbonPeriod::create($startDate, $endDate);

        $labels = [];
        $barangMasukData = [];
        $barangKeluarData = [];

        foreach ($period as $date) {
            $labels[] = $date->format('d M');

            $barangMasukData[] = ItemIn::whereDate('date', $date)
                ->sum('qty');

            $barangKeluarData[] = ItemOut::whereDate('created_at', $date)
                ->sum('qty');
        }

        $monthlyIncome = Transaction::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('SUM(total) as total')
        )
        ->whereYear('created_at', now()->year)
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('total', 'month');


        $monthlyExpense = ItemIn::select(
                DB::raw('MONTH(date) as month'),
                DB::raw('SUM(subtotal) as total')
            )
            ->whereYear('date', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');

        $months = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];

        $pemasukanBulanan = [];
        $pengeluaranBulanan = [];

        for ($i = 1; $i <= 12; $i++) {
            $pemasukanBulanan[] = $monthlyIncome[$i] ?? 0;
            $pengeluaranBulanan[] = $monthlyExpense[$i] ?? 0;
        }


        return view('admin.index', compact(
            'barangMasuk',
            'barangKeluar',
            'pemasukan',
            'pengeluaran',
            'filter',
            'startDate',
            'endDate',
            'labels',
            'barangMasukData',
            'barangKeluarData',
            'months',
            'pemasukanBulanan',
            'pengeluaranBulanan'
        ));
    }

    private function resolveDateFilter(string $filter, Request $request): array
    {
        switch ($filter) {
            case 'weekly':
                return [
                    Carbon::now()->startOfWeek(),
                    Carbon::now()->endOfWeek(),
                ];

            case 'monthly':
                return [
                    Carbon::now()->startOfMonth(),
                    Carbon::now()->endOfMonth(),
                ];

            case 'custom':
                $request->validate([
                    'start_date' => 'required|date',
                    'end_date'   => 'required|date|after_or_equal:start_date',
                ]);

                return [
                    Carbon::parse($request->start_date)->startOfDay(),
                    Carbon::parse($request->end_date)->endOfDay(),
                ];

            case 'today':
            default:
                return [
                    Carbon::today()->startOfDay(),
                    Carbon::today()->endOfDay(),
                ];
        }
    }
}
