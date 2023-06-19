<?php

use App\Http\Controllers\Front;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {   });
    // return view('front.index');


    // return \App\Models\Product::find(6)->productImages;
     Route::get('/', [Front\HomeController::class, 'index']);
     Route::get('/shop/product/{id}', [Front\ShopController::class, 'show']);
     Route::post('/shop/product/{id}', [Front\ShopController::class, 'postComment']);

   
