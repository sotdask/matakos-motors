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
    return view('pages.homepage');
});
Route::get('/partners', function () {
    return view('pages.partners');
});
Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/single-article', function () {
    return view('pages.single-article');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
});
Route::get('/cookies-policy', function () {
    return view('pages.cookies-policy');
});
Route::get('/accessories', function () {
    return view('pages.accessories');
});
Route::get('/synergeio', function () {
    return view('pages.synergeio');
});