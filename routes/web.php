<?php

use App\Models\Coffee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoffeeController;
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
    return view('index', [
        'title' => 'Home',
        'section' => 'Welcome To',
        'button' => 'Details'
    ]);
});

Route::get('/product', function () {
    return view('product', [
        'title' => 'Product',
        'section' => 'Our Menus',
        'button' => 'Read More',
        'coffees' => Coffee::all()
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

Route::resource('coffee', CoffeeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');