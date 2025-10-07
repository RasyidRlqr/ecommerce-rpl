<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller {
    public function index(Request $request){
        $query = Product::query();
        if ($request->filled('search')) { $query->where('name', 'like', '%' . $request->input('search') . '%'); }
        if ($request->filled('type')) { $query->where('type', $request->input('type')); }
        return response()->json($query->latest()->paginate(12));
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), ['name' => 'required|string|max:255', 'slug' => 'required|string|unique:products,slug', 'price' => 'required|numeric', 'stock' => 'nullable|integer', 'type' => 'required|string']);
        if($validator->fails()) return response()->json($validator->errors(), 422);
        $product = Product::create($validator->validated());
        return response()->json($product, 201);
    }
    public function show($id){
        $product = Product::find($id);
        if(!$product) return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        return response()->json($product);
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        if(!$product) return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        $validator = Validator::make($request->all(), ['name' => 'sometimes|required|string', 'price' => 'sometimes|required|numeric']);
        if($validator->fails()) return response()->json($validator->errors(), 422);
        $product->update($validator->validated());
        return response()->json($product);
    }
    public function destroy($id){
        $product = Product::find($id);
        if(!$product) return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        $product->delete();
        return response()->json(['message' => 'Produk berhasil dihapus']);
    }
}