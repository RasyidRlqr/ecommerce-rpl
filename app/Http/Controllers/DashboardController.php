<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            $totalProduk = Product::count();
            $totalPesanan = Order::count();
            $pesananSelesai = Order::where('status', 'completed')->count();

            // Pendapatan total dari semua order (join ke products)
            $pendapatan = DB::table('orders')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->sum('products.price');

            // Ambil total penjualan per bulan (tahun ini)
            $salesData = DB::table('orders')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->select(
                    DB::raw('MONTH(orders.created_at) as month'),
                    DB::raw('SUM(products.price) as total')
                )
                ->whereYear('orders.created_at', date('Y'))
                ->groupBy('month')
                ->orderBy('month')
                ->get();

            $labels = $salesData->pluck('month')->map(function($m) {
                return date('M', mktime(0, 0, 0, $m, 10)); // Jan, Feb, Mar...
            });

            $data = $salesData->pluck('total');

            // Chart kategori (contoh tetap pakai dummy)
            $kategorilabel = ['Website', 'Mobile App', 'Game', 'Courses'];
            $kategoridata = [5, 3, 4, 2];

            $latestOrders = Order::latest()->take(5)->get();

            return view('dashboard.dashboard', compact(
                'totalProduk', 'totalPesanan', 'pesananSelesai', 'pendapatan',
                'labels', 'data',
                'kategorilabel', 'kategoridata',
                'latestOrders'
            ));
        }

        return view('dashboard.user', ['user' => $user]);
    }
}
