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

Route::get('/', function () {
    $data = [
        'comics' => config('db.comics')
    ];
    // dd(config('db.comics'));
    return view('navbar_elements.comics', $data);
})->name('navbar_elements.comics');

Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    if ($id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    } else {
        abort('Not Found!');
    }
})->name('comics.show');

Route::get('/characters', function () {
    return view('navbar_elements.characters');
})->name('navbar_elements.characters');

Route::get('/movies', function () {
    return view('navbar_elements.movies');
})->name('navbar_elements.movies');

Route::get('/tv', function () {
    return view('navbar_elements.tv');
})->name('navbar_elements.tv');

Route::get('/games', function () {
    return view('navbar_elements.games');
})->name('navbar_elements.games');

Route::get('/collectibles', function () {
    return view('navbar_elements.collectibles');
})->name('navbar_elements.collectibles');

Route::get('/videos', function () {
    return view('navbar_elements.videos');
})->name('navbar_elements.videos');

Route::get('/fans', function () {
    return view('navbar_elements.fans');
})->name('navbar_elements.fans');

Route::get('/news', function () {
    return view('navbar_elements.news');
})->name('navbar_elements.news');

Route::get('/shop', function () {
    return view('navbar_elements.shop');
})->name('navbar_elements.shop');
