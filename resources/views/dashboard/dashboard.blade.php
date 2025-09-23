@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Dashboard Pemesanan Produk RPL</h1>

    <!-- Cards Statistik -->
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Produk</h5>
                    <p class="card-text fs-4">{{ $totalProduk ?? 12 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Pesanan</h5>
                    <p class="card-text fs-4">{{ $totalPesanan ?? 34 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pesanan Selesai</h5>
                    <p class="card-text fs-4">{{ $pesananSelesai ?? 20 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pendapatan</h5>
                    <p class="card-text fs-4">Rp {{ number_format($pendapatan ?? 4500000) }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tren Pemesanan</div>
                <div class="card-body">
                    <canvas id="pesananChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Status Pesanan</div>
                <div class="card-body">
                    <canvas id="statusChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pesanan Terbaru -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pesanan Terbaru</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer</th>
                                <th>Produk</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Alice</td>
                                <td>Aplikasi Kasir</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>2025-09-22</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bob</td>
                                <td>Website Portofolio</td>
                                <td><span class="badge bg-warning">Proses</span></td>
                                <td>2025-09-23</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Charlie</td>
                                <td>E-commerce RPL</td>
                                <td><span class="badge bg-danger">Pending</span></td>
                                <td>2025-09-23</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
