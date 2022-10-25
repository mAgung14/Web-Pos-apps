<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Payment;
use App\Models\Product;

use App\Models\User;
use App\Models\Variant;

class DashboardController extends Controller
{
    public function index()
    {
        $product = Product::count();
        $payment = payment::count();
        $variant = Variant::count();
        return view('dashboard', compact('product','payment','variant'));
    }    
}
