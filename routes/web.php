<?php

use App\Http\Controllers\MenuController;
use App\Models\Menu;
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

Route::get('/4LeafClover', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('home');
});

Route::get('/Our-Story', function () {
    return view('our-story');
});

Route::get('/Menu', function () {
    return view('menu', [
        'menus'=> Menu::all()->where('title', 'Breakfast')
    ]);
});

Route::get('/Menu-second-page', function () {
    return view('menu-second-page', [
        'menus'=> Menu::all()->where('title', 'Dessert')
    ]);
});

Route::get('/Menu-third-page', function () {
    return view('menu-third-page', [
        'menus'=> Menu::all()->where('title', 'Burger')
    ]);
});

Route::get('/Menu-fourth-page', function () {
    return view('menu-fourth-page', [
        'menus'=> Menu::all()->where('title', 'Pizza')
    ]);
});

Route::get('/Menu-fifth-page', function () {
    return view('menu-fifth-page', [
        'menus'=> Menu::all()->where('title', 'Drinks')
    ]);
});

Route::get('/Reservation', function () {
    return view('reservation');
});

Route::get('/Contact', function () {
    return view('contact');
});

Route::get('/My-Account', function () {
    return view('my-account');
});

Route::get('/', [MenuController::class, 'index']);
Route::get('cart', [MenuController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [MenuController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [MenuController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [MenuController::class, 'remove'])->name('remove_from_cart');
