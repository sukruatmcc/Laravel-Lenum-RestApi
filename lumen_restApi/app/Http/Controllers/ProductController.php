<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function showall()
    {
       return response()->json(Product::all());
    }

    public function show($id)
    {
       return response()->json(Product::find($id));
    }

    public function showAllCategory()
    {
       $products=Product::with('category')->get();
       return response()->json($products);
    }

    public function save(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product);
    }

    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json($product);
    }

    public function delete($id)
    {
        Product::findOrFail($id)->delete();
        return response()->json('Ürün Silinmiştir.');
    }
}
