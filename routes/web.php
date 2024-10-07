<?php
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/data',function(){
    $products = Product::with('supplier', 'category')->get();
    //$products = Product::where('supplier_id', 2);
    //return $products[0]->supplier->name;
    return $products;
});