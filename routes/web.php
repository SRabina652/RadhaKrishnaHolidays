<?php

use App\Http\Controllers\AdminPakagesController;
use App\Http\Controllers\PakagesController;
use App\Models\Pakages;
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
Route::get('/display',[PakagesController::class, 'index']);
Route::get('/add',[PakagesController::class,'create'])->name('pakages.index');
Route::post('/store',[PakagesController::class,'store'])->name('pakages.store');
Route::get('/edit/{id}', [PakagesController::class,'edit'])->name('pakages.edit');


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

