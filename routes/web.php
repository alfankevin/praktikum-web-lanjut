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
    return view('home', [
        'title' => 'Home',
        'section' => 'Welcome To',
        'button' => 'Details'
    ]);
});

// Route::prefix('/category') -> group(function () {
//     Route::get('/product', function () {
//         return view('product');
//     });
//     Route::get('/program', function() {
//         return view('program');
//     });
// });

Route::get('/product', function () {
    return view('product', [
        'title' => 'Product',
        'section' => 'Our Menus',
        'button' => 'Read More'
    ]);
});

Route::get('/program', function () {
    return view('program', [
        'title' => 'Program',
        'section' => "Today's Special",
        'button' => 'Read More'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'section' => "Contact Us",
        'button' => 'Message Us'
    ]);
});

// Route::get('/news/{news?}', function ($news='') {
//     return 'Halaman News ' .$news; 
// });

// Route::resource('/contact', ContactController::class) -> only('store');