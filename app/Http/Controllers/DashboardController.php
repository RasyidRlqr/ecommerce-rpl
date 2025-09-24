<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            $totalProduk = class_exists(Product::class) ? Product::count() : 12;
            $totalPesanan = class_exists(Order::class) ? Order::count() : 34;
            $pesananSelesai = 20;
            $pendapatan = 4500000;

            // contoh data chart (bulan)
            $labels = ['Apr','Mei','Jun','Jul','Agu','Sep'];
            $data = [5, 12, 8, 15, 20, 10];

            // ✅ Ambil pesanan terbaru (kalau ada model Order)
            $latestOrders = class_exists(Order::class) 
                ? Order::latest()->take(5)->get() 
                : collect([]); // kalau gak ada model, kirim collection kosong

            return view('dashboard.dashboard', compact(
                'totalProduk',
                'totalPesanan',
                'pesananSelesai',
                'pendapatan',
                'labels',
                'data',
                'latestOrders' // ✅ dikirim ke view
            ));
        }

        return view('dashboard.user', ['user' => $user]);
    }
}
