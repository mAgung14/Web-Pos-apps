<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function variant(){
        $variant['variant'] = Variant::all();
        return view('variant.variant')->with($variant);
    }

    public function store(){
        return view('variant.variantadd');
    }

    public function add(Request $request){
        Variant::create($request->All());
        return redirect()->route('variant');
    }

    public function edit($id){  
        $var = Variant::find($id);
        return view('variant.variantedit', compact('var'));
    }

    public function update(Request $request, $id)
    {
        $data = Variant::find($id);
        $data->update($request->all());
        return redirect()->route('variant');
    }
    public function delete($id){
        $delete = Variant::find($id);
        $delete->delete();
        return back();
    }

}
