<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products =Product::paginate(3);
        return view('Products.index',compact('products'));
    }

    public function createProduct(Request $request)
    {
        $img = $request->file('image')->store('upload','public');
        Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            "cost"=>$request->cost,
            "img"=>$img
        ]);
        
    }


    public function productMore(Product $product, Request $request)
    {
        
        return view('Products.more', compact('product'));
    }

    public function delProduct(Product $product)
    {
        
        $product->delete();
        return redirect()->route('products');
    }

    public function destroy(Product $product)
    {
        
    }

}
