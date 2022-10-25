<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentContrroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\VariantController;
use App\Models\ProductVariant;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthenticatedSessionController::class, 'create'])->middleware(['guest']);
// Route::post('/', [AuthenticatedSessionController::class, 'login'])->middleware(['guest']);

// Route::get('/', [AuthenticatedSessionController::class, 'create'])->middleware(['guest']);

Route::get('/Register', [RegisteredUserController::class, 'create']);
Route::post('/Register', [RegisteredUserController::class, 'post']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');


Route::group(['middleware' => 'auth'], function(){
    // crud payment
    Route::get('/pay', [PaymentController::class, 'payment'])->name('pay');

    Route::get('/payment', [PaymentController::class, 'store'])->name('payment');
    Route::post('/payment/add', [PaymentController::class, 'add'])->name('add');
    Route::get('/payment/edit/{id}', [PaymentController::class, 'edit']);
    Route::post('/payment/edit{id}', [PaymentController::class, 'update']);
    Route::get('/payment/delete/{id}', [PaymentController::class, 'delete']);

    // variant crud
    Route::get('/variant', [VariantController::class, 'variant'])->name('variant');
    Route::get('/variant/add', [VariantController::class, 'store'])->name('add');
    Route::post('/variant/add', [VariantController::class, 'add']);
    Route::get('/variant/edit/{id}', [VariantController::class, 'edit']);
    Route::post('/variant/edit{id}', [VariantController::class, 'update']);
    Route::get('/variant/delete/{id}', [VariantController::class, 'delete']);

    //crud product
    Route::get('/product', [ProductController::class, 'product'])->name('product');
    
    Route::get('/product/add', [ProductController::class,'store'])->name('add');
    Route::post('/product/add', [ProductController::class,'add'])->name('add');
    Route::get('/product/edit/{id}', [ProductController::class,'edit']);
    Route::post('/product/edit{id}', [ProductController::class,'update']);
    Route::get('/product/delete/{id}', [ProductController::class, 'delete']);


    // product variant crud
    Route::get('/product_variant', [ProductVariantController::class, 'store'])->name('product variant');

    Route::get('/product_variant/add', [ProductVariantController::class,'tambah'])->name('add');
    Route::post('/product_variant/add', [ProductVariantController::class,'add'])->name('add');
    Route::get('/product_variant/edit', [ProductVariantController::class,'edit'])->name('update');
    Route::post('/product_variant/edit', [ProductVariantController::class,'update'])->name('update');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
