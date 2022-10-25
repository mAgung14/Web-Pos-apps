<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $product['product'] = Product::all();
        return view('product.product')->with($product);
    }

    public function store(){
        // $category = categorty::all();
        // $suplier = suplier::all();
        return view('product.productadd');
        // ->with($category,$suplier)
    }

    public function add(Request $req){
        Product::create($req->all());
        return redirect()->route('product');
    }

    public function edit($id){
        $pro = Product::find($id);
        return view('product.productedit', compact('pro'));
    }

    public function update(Request $req,$id){
        $pro = Product::find($id);
        $pro->update($req->all());
        return redirect('product');
    }

    public function delete($id){
        $delete = Product::find($id);
        $delete->delete();
        return back();
    }
}
