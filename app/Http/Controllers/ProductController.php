<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // ambil semua produk dari tabel products
        $products = Product::all();

        // kirim ke view
        return view('products.index', compact('products'));
    }
}
