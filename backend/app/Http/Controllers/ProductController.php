<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller {
    public function index(Request $r) {
        return response()->json(Product::paginate(20));
    }
    public function show($id) {
        return response()->json(Product::findOrFail($id));
    }
}
