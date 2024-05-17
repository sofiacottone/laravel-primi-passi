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
        'greeting' => 'Hello',
        'name' => 'Laravel',
        'logo' => 'https://img.icons8.com/arcade/64/laravel.png',
    ];

    return view('home', $data);
});
