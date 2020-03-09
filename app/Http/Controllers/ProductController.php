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
        return redirect()->route('products');
        
    }
    public function update(Request $request, Product $product)
    {
        $img = $request->file('image')->store('upload','public');


        $product->name = $request->name;
        $product->description = $request->description;
        $product->cost =$request->cost;
        $product->img=$img;
        
        $product->save();

        

        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    public function productMore(Product $product, Request $request)
    {
        
        return view('Products.more', compact('product'));
    }

    public function destroy(Product $product)
    {
        
        $product->delete();
        
        return redirect()->route('products');
    }



}
