<?php

use App\Http\Controllers\AdminPakagesController;
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

Route::get('/',[AdminPakagesController::class, 'index']);



Route::get('/home', function () {
    return view('home');
});
Route::get('/booknow', function () {
    return view('booknow');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/trekkingpackage', function () {
    return view('trekkingpackage');
});
Route::get('/annapurna', function () {
    return view('annapurna-region-trek-subpackage');
});
Route::get('/annapurnabasecamptrek', function () {
    return view('annapurna-base-camp-trek-detail');
});