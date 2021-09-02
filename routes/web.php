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
    return view('home');
});
Route::get('/ascii-art', function () {
    return view('ascii-art',
    [
        'artName' => "Smiles",
        'asciiArt' => "(✿◡‿◡) ╰(*°▽°*)╯" 
    ]
);
})->name('ascii.art');
Route::get('/backdrop', function () {
    return view('backdrop',
    [
        'backdrop' => "https://image.shutterstock.com/image-photo/woman-overlooking-waterfall-skogafoss-iceland-600w-1139809691.jpg" 
    ]
);
})->name('backdrop');
