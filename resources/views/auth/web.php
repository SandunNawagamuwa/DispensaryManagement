<?php

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
    return view('front');
});

Route::get('/front', function () {
    return view('front');
});

Route::get('/Doctor', function () {
    return view('Doctor');
});

Route::get('/addoc', function () {
    return view('addoc');
});

Route::get('/adregi', function () {
    return view('adregi');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/docmedi', function () {
    return view('docmedi');
});

Route::get('/patient', function () {
    return view('patient');
});

Route::get('/regiapp', function () {
    return view('regiapp');
});

Route::get('/registrator', function () {
    return view('registrator');
});

Route::get('/front', function () {
    return view('front');
});
