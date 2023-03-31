<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('home');
});

Route::prefix('/category') -> group(function () {
    Route::get('/product', function () {
        return view('product');
    });
    Route::get('/program', function() {
        return view('program');
    });
});

Route::get('/news/{news?}', function ($news='') {
    return 'Halaman News ' .$news; 
});

Route::get('/about-us', function () {
    return view('about-us');
});    

Route::resource('/contact-us', ContactController::class) -> only('store');