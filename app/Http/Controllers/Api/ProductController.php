<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str; // <-- Tambahkan ini untuk menggunakan Str::slug

class ProductController extends Controller
{
    /**
     * Menampilkan semua produk.
     */
    public function index(Request $request)
    {
        $query = Product::query();
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }
        if ($request->filled('type')) {
            $query->where('type', $request->input('type'));
        }
        return response()->json($query->latest()->paginate(12));
    }

    /**
     * Menyimpan produk baru.
     */
    public function store(Request $request)
    {
        // Validasi tanpa slug
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'nullable|integer|min:0',
            'type' => 'required|string',
            'image_url' => 'nullable|url'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $validatedData = $validator->validated();
        // Buat slug secara otomatis dari nama produk
        $validatedData['slug'] = Str::slug($validatedData['name'], '-');

        $product = Product::create($validatedData);

        return response()->json($product, 201);
    }

    /**
     * Menampilkan satu produk spesifik.
     */
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }
        return response()->json($product);
    }

    /**
     * Memperbarui data produk.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        // Validasi yang lebih lengkap untuk update
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'sometimes|required|numeric|min:0',
            'stock' => 'nullable|integer|min:0',
            'type' => 'sometimes|required|string',
            'image_url' => 'nullable|url'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $validatedData = $validator->validated();

        // Jika nama produk diubah, buat ulang slug-nya
        if ($request->has('name')) {
            $validatedData['slug'] = Str::slug($validatedData['name'], '-');
        }

        $product->update($validatedData);

        return response()->json($product);
    }

    /**
     * Menghapus produk.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }
        $product->delete();
        return response()->json(['message' => 'Produk berhasil dihapus']);
    }
}