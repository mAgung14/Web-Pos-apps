<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function payment(){
        $payment['payment'] = payment::All();
        return view('payment.pay')->with($payment);
    }

    public function store(){
        return view('payment.paymentadd');
    }

    public function add(Request $request){
        Payment::create($request->All());
        return redirect()->route('payment');
    }

    public function edit($id){  
        $pay = Payment::find($id);
        return view('payment.paymentedit', compact('pay'));
    }

    public function update(Request $request, $id)
    {
        $data = Payment::find($id);
        $data->update($request->all());
        return redirect()->route('payment');
    }

    public function delete($id){
        $pay = Payment::find($id);
        $pay->delete();
        return back();
    }
}
