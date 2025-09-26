@extends('layouts.app')

@section('content')
<div class="container-fluid py-6 dashboard-page ">

  <!-- Header -->
  <div class="flex justify-between items-center mb-6">
    <div>
      <h1 class="text-3xl font-bold">Admin Dashboard</h1>
      <p class="text-gray-600">Welcome back! Here's what's happening with your store.</p>
    </div>
    <div>
      <a href="{{ route('products.index') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow mr-2">Manage Products</a>
      <a href="{{ route('users.index') }}" class="px-4 py-2 bg-white border rounded-lg shadow">Manage Users</a>
    </div>
  </div>

  <!-- Metric Cards -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow p-6 flex justify-between items-center">
      <div>
        <p class="text-sm text-gray-500">total Produk</p>
        <h2 class="text-2xl font-bold">{{ $totalProduk }}</h2>
      </div>
      <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
        <i class="fas fa-box"></i>
      </div>
    </div>
    <div class="bg-white rounded-lg shadow p-6 flex justify-between items-center">
      <div>
        <p class="text-sm text-gray-500">Total Orders</p>
        <h2 class="text-2xl font-bold">{{ $totalPesanan }}</h2>
      </div>
      <div class="bg-green-100 text-green-600 p-3 rounded-full">
        <i class="fas fa-shopping-cart"></i>
      </div>
    </div>
    <div class="bg-white rounded-lg shadow p-6 flex justify-between items-center">
      <div>
        <p class="text-sm text-gray-500">Completed Orders</p>
        <h2 class="text-2xl font-bold">{{ $pesananSelesai }}</h2>
      </div>
      <div class="bg-teal-100 text-teal-600 p-3 rounded-full">
        <i class="fas fa-check-circle"></i>
      </div>
    </div>
    <div class="bg-white rounded-lg shadow p-6 flex justify-between items-center">
      <div>
        <p class="text-sm text-gray-500">Revenue</p>
        <h2 class="text-2xl font-bold">Rp {{ number_format($pendapatan,0,',','.') }}</h2>
      </div>
      <div class="bg-yellow-100 text-yellow-600 p-3 rounded-full">
        <i class="fas fa-dollar-sign"></i>
      </div>
    </div>
  </div>

  <!-- Charts -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow p-6">
      <h3 class="text-lg font-semibold mb-4">Total Penjualan</h3>
      <canvas id="monthlySalesChart"
        data-labels="{{ json_encode($labels) }}"
        data-values="{{ json_encode($data) }}">
      </canvas>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
      <h3 class="text-lg font-semibold mb-4">Products by Category</h3>
      <canvas id="productsByCategoryChart"
        data-labels="{{ json_encode($kategorilabel) }}"
        data-values="{{ json_encode($kategoridata) }}">
      </canvas>
    </div>
  </div>

  <!-- Latest Orders Table (opsional) -->
  <div class="bg-white rounded-lg shadow p-6">
    <h4 class="font-semibold mb-4">Latest Orders</h4>
    <div class="overflow-auto">
      <table class="w-full text-left">
        <thead>
          <tr class="border-b">
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">User</th>
            <th class="px-4 py-2">Total</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Date</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($latestOrders as $order)
            <tr class="hover:bg-gray-100">
              <td class="px-4 py-2">{{ $order->id }}</td>
              <td class="px-4 py-2">{{ $order->user->name ?? '' }}</td>
              <td class="px-4 py-2">Rp {{ number_format($order->total_price ?? 0,0,',','.') }}</td>
              <td class="px-4 py-2">{{ $order->status }}</td>
              <td class="px-4 py-2">{{ $order->created_at->format('d M Y') }}</td>
            </tr>
          @empty
            <tr><td colspan="5" class="px-4 py-2 text-center">No recent orders</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

</div>
@endsection
