<?php

use Illuminate\Support\Facades\Route;

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

//homepage
Route::get('/', function () {
    return view('guest.home',[
        'menu' => config('menu'),
    ]);
    // dare un nome alla rotta
}) ->name('home');

//pagina prodotti
Route::get('/prodotti', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.prodotti', [
        'menu' => $menu,
        'comics' => $comics,
    ]);
})->name('prodotti');

//pagina news
Route::get('/news', function () {
    $menu = config('menu');
    return view('guest.news', [
        'menu' => $menu,
    ]);
})->name('news');
