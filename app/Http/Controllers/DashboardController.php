<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product; // optional: jika ada model
use App\Models\Order;   // optional: jika ada model

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            // Ambil data nyata jika model tersedia, kalau tidak pakai dummy
            $totalProduk = class_exists(Product::class) ? Product::count() : 12;
            $totalPesanan = class_exists(Order::class) ? Order::count() : 34;
            $pesananSelesai = 20;
            $pendapatan = 4500000;

            // contoh data chart (bulan)
            $labels = ['Apr','Mei','Jun','Jul','Agu','Sep'];
            $data = [5, 12, 8, 15, 20, 10];

            return view('dashboard.admin', compact(
                'totalProduk','totalPesanan','pesananSelesai','pendapatan','labels','data'
            ));
        }

        // user biasa
        return view('dashboard.user', ['user' => $user]);
    }
}
