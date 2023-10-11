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

    $title = 'Hello world';

    return view('homepage', compact('title'));

})->name('homepage');

Route::get('/page1', function() {

    $title = 'Page 1';

    return view('page1', compact('title'));

})->name('page1');



Route::get('/page2', function() {

    $title = 'Page 2';

    return view('page2', compact('title'));

})->name('page2');

