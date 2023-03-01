<?php

use App\Http\Controllers\AdminPakagesController;
use App\Http\Controllers\PakagesController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ContractController;
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
Route::get('/display',[PakagesController::class, 'index'])->name('pakages.display');
Route::get('/add',[PakagesController::class,'create'])->name('pakages.index');
Route::post('/store',[PakagesController::class,'store'])->name('pakages.store');
Route::get('/edit/{product}', [PakagesController::class,'edit'])->name('pakages.edit');
Route::put('/update/{product}', [PakagesController::class,'update'])->name('pakages.update');
Route::delete('/delete/{id}',[PakagesController::class,'destroy'])->name('pakages.delete');



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



Route::get('/footer', [FooterController::class, 'index'])->name('footer.index');
Route::get('/footer/edit/{footer}', [FooterController::class, 'edit'])->name('footer.edit');
Route::put('/footer/update/{footer}', [FooterController::class, 'update'])->name('footer.update');


Route::get('/logo', [LogoController::class, 'index'])->name('logo.index');
Route::get('/logo/edit/{logo}', [LogoController::class, 'edit'])->name('logo.edit');
Route::put('/logo/update/{logo}', [LogoController::class, 'update'])->name('logo.update');


Route::get('/contact', [ContractController::class, 'index'])->name('contact.index');
