<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Katalog produk (public)
    public function index()
    {
        $products = Product::latest()->paginate(12); // tampil 12 produk per halaman
        return view('products.index', compact('products'));
    }

    // Detail produk
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('detail', compact('product'));
    }

    // ------ Untuk Admin CRUD ------
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'slug'  => 'required|string|unique:products,slug',
            'price' => 'required|numeric',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'slug'  => 'required|string|unique:products,slug,' . $product->id,
            'price' => 'required|numeric',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }
}
