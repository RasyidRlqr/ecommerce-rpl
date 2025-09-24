@extends('layouts.app')

@section('content')
<div class="p-6 space-y-10 dashboard-page bg-gray-50 min-h-screen">

    <!-- Header -->
    <div class="flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-lg">Halo, 
                <span class="font-semibold text-gray-800">{{ Auth::user()->name }}</span> 
            </p>
        </div>
        <div class="flex items-center gap-3">
            <button class="p-3 rounded-full bg-white shadow hover:bg-gray-100 transition">
                <i class="fas fa-bell text-gray-500"></i>
            </button>
            <button class="p-3 rounded-full bg-white shadow hover:bg-gray-100 transition">
                <i class="fas fa-user-circle text-gray-500"></i>
            </button>
        </div>
    </div>

    <!-- Statistik Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-6 rounded-2xl shadow hover:scale-105 transition">
            <p class="text-sm opacity-90">Total Produk</p>
            <h2 class="text-3xl font-bold">{{ $totalProduk ?? 0 }}</h2>
        </div>
        <div class="bg-gradient-to-r from-emerald-500 to-teal-500 text-white p-6 rounded-2xl shadow hover:scale-105 transition">
            <p class="text-sm opacity-90">Total Pesanan</p>
            <h2 class="text-3xl font-bold">{{ $totalPesanan ?? 0 }}</h2>
        </div>
        <div class="bg-gradient-to-r from-amber-500 to-orange-500 text-white p-6 rounded-2xl shadow hover:scale-105 transition">
            <p class="text-sm opacity-90">Pending</p>
            <h2 class="text-3xl font-bold">{{ $pendingOrders ?? 0 }}</h2>
        </div>
        <div class="bg-gradient-to-r from-fuchsia-500 to-purple-500 text-white p-6 rounded-2xl shadow hover:scale-105 transition">
            <p class="text-sm opacity-90">Pendapatan</p>
            <h2 class="text-3xl font-bold">Rp {{ number_format($pendapatan ?? 0) }}</h2>
        </div>
    </div>

    <!-- Grafik -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="font-semibold text-gray-800 mb-4">📈 Tren Pemesanan</h3>
            <canvas id="pesananChart" class="w-full h-64"></canvas>
        </div>
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="font-semibold text-gray-800 mb-4">📊 Status Pesanan</h3>
            <canvas id="statusChart" class="w-full h-64"></canvas>
        </div>
    </div>

    <!-- Pesanan Terbaru & Ringkasan -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Pesanan Terbaru -->
        <div class="lg:col-span-2 bg-white rounded-2xl shadow p-6">
            <h3 class="font-semibold text-gray-800 mb-4">🛒 Pesanan Terbaru</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-gray-700">
                    <thead>
                        <tr class="bg-gray-100 text-left">
                            <th class="py-3 px-4">#</th>
                            <th class="py-3 px-4">Customer</th>
                            <th class="py-3 px-4">Produk</th>
                            <th class="py-3 px-4">Status</th>
                            <th class="py-3 px-4">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($latestOrders as $i => $order)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-4">{{ $i+1 }}</td>
                            <td class="py-3 px-4">{{ $order->customer_name }}</td>
                            <td class="py-3 px-4">{{ $order->product_name }}</td>
                            <td class="py-3 px-4">
                                <span class="px-3 py-1 rounded-full text-xs font-medium
                                    @if($order->status == 'Selesai') bg-green-100 text-green-700
                                    @elseif($order->status == 'Proses') bg-yellow-100 text-yellow-700
                                    @else bg-red-100 text-red-700 @endif">
                                    {{ $order->status }}
                                </span>
                            </td>
                            <td class="py-3 px-4">{{ $order->created_at->format('Y-m-d') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Ringkasan Akun -->
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="font-semibold text-gray-800 mb-4">👤 Ringkasan Akun</h3>
            <div class="space-y-3 text-sm">
                <p>Total Pengguna: <strong>{{ $totalUsers ?? 0 }}</strong></p>
                <p>Produk Aktif: <strong>{{ $activeProducts ?? 0 }}</strong></p>
                <p>Pesanan Pending: <strong>{{ $pendingOrders ?? 0 }}</strong></p>
            </div>
            <div class="mt-4 space-y-2">
                <a href="{{ route('products.index') }}" class="block text-center bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">Kelola Produk</a>
                <a href="{{ route('orders.index') }}" class="block text-center border border-indigo-600 text-indigo-600 py-2 rounded-lg hover:bg-indigo-50 transition">Kelola Pesanan</a>
            </div>
        </div>
    </div>

</div>
@endsection
