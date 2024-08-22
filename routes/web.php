<?php

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

Route::get('/', function () {
    return view('home');
});


route::get('/about', function(){
    return view('about');
});

route::get('/services', function(){
    return view('services');
});

route::get('/why', function(){
    return view('why');
});


route::get('/team', function(){
    return view('team');
});