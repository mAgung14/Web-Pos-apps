<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Variant;
use Illuminate\Http\Request;

class ProductVariantController extends Controller
{
    public function store(){
        $products['product_varant'] = ProductVariant::all();
        return view('productvariant.productvariant')->with($products);
    }

    public function tambah(){
        $pro = Product::all();
        $var = Variant::all();
        return view('productvariant.productvariantadd', compact('pro','var'));
    }

    public function add(Request $request){
        ProductVariant::create($request->all());
        return redirect()->route('/product/add');
    }

    public function edit($id){
        $pro = ProductVariant::find($id);
        return view('productvariant.productvariantedit',compact('pro'));
    }
}
