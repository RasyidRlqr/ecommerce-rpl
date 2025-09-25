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

            // ✅ Hitung pendapatan dari harga produk
            $pendapatan = DB::table('orders')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->sum('products.price');

            $labels = ['Jan','Feb','Mar','Apr','Mei','Jun', 'Jul','Agust', 'Sept'];
            $data = [10, 15, 7, 20, 25, 18, 100, 39, 12];

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
