<?php

use App\Http\Controllers\AdminPakagesController;
use App\Http\Controllers\PakagesController;
use App\Http\Controllers\FooterController;
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



Route::get('/footer', [FooterController::class, 'index'])->name('footer.index');
Route::get('/footer/edit/{footer}', [FooterController::class, 'edit'])->name('footer.edit');
Route::put('/footer/update/{footer}', [FooterController::class, 'update'])->name('footer.update');




Route::get('/', function () {
    return view('home');
});
Route::get('/mountainflight', function () {
    return view('mountainflight');
});
Route::get('/trekkingpackage', function () {
    return view('trekkingpackage');
});
Route::get('/tourpackage', function () {
    return view('tourpackage');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});



Route::get('/annapurna-region-trek', function () {
    return view('trekking-region-list.annapurna-region-trek');
});
Route::get('/dolkha-region-trek', function () {
    return view('trekking-region-list.dolkha-region-trek');
});
Route::get('/dolpa-region-trek', function () {
    return view('trekking-region-list.dolpa-region-trek');
});
Route::get('/everest-region-trek', function () {
    return view('trekking-region-list.everest-region-trek');
});
Route::get('/langtang-region-trek', function () {
    return view('trekking-region-list.langtang-region-trek');
});
Route::get('/non-tourist-region-trek', function () {
    return view('trekking-region-list.non-tourist-region-trek');
});


Route::get('/nepal-tour', function () {
    return view('tour-region-list.nepal-tour');
});
Route::get('/india-tour', function () {
    return view('tour-region-list.india-tour');
});
Route::get('/bhutan-tour', function () {
    return view('tour-region-list.bhutan-tour');
});
Route::get('/tibet-tour', function () {
    return view('tour-region-list.tibet-tour');
});
Route::get('/outbound-tour', function () {
    return view('tour-region-list.outbound-tour');
});
Route::get('/kailash-tour', function () {
    return view('tour-region-list.kailash-tour');
});
Route::get('/gangtok-tour', function () {
    return view('tour-region-list.gangtok-tour');
});
Route::get('/chardham-tour', function () {
    return view('tour-region-list.chardham-tour');
});


Route::get('/annapurna-base-camp-trek-detail', function () {
    return view('trekking-region-detail-list.annapurnaregion-annapurna-base-camp-trek-detail');
});
Route::get('/dhaulagiri-circuit-trek-detail', function () {
    return view('trekking-region-detail-list.annapurnaregion-dhaulagiri-circuit-trek-detail');
});
Route::get('/pokhara-to-jomsom-trek-detail', function () {
    return view('trekking-region-detail-list.annapurnaregion-pokhara-to-jomsom-trek-detail');
});

Route::get('/kalinchowk-trek-detail', function () {
    return view('trekking-region-detail-list.dolkharegion-kalinchowk-trek-detail');
});

Route::get('/dolpa-nomad-trek-detail', function () {
    return view('trekking-region-detail-list.dolparegion-dolpa-nomad-trek-detail');
});
Route::get('/dolpa-to-jomson-trek-detail', function () {
    return view('trekking-region-detail-list.dolparegion-dolpa-to-jomson-trek-detail');
});
Route::get('/dolpa-to-jumla-trek-detail', function () {
    return view('trekking-region-detail-list.dolparegion-dolpa-to-jumla-trek-detail');
});
Route::get('/dolpa-to-humla-trek-detail', function () {
    return view('trekking-region-detail-list.dolparegion-dolpa-to-humla-trek-detail');
});
Route::get('/jumla-to-rara-lake-trek-detail', function () {
    return view('trekking-region-detail-list.dolparegion-jumla-to-rara-lake-trek-detail');
});
Route::get('/lower-dolpa-and-tarap-valley-trek-detail', function () {
    return view('trekking-region-detail-list.dolparegion-lower-dolpa-and-tarap-valley-trek-detail');
});
Route::get('/upper-dolpa-shey-gompa-trek-detail', function () {
    return view('trekking-region-detail-list.dolparegion-upper-dolpa-shey-gompa-trek-detail');
});
Route::get('/upper-dolpa-trek-detail', function () {
    return view('trekking-region-detail-list.dolparegion-upper-dolpa-trek-detail');
});

Route::get('/chola-pass-to-everest-base-camp-trek-detail', function () {
    return view('trekking-region-detail-list.everestregion-chola-pass-to-everest-base-camp-trek-detail');
});
Route::get('/everest-base-camp-trek-detail', function () {
    return view('trekking-region-detail-list.everestregion-everest-base-camp-trek-detail');
});
Route::get('/everest-gokyo-lake-trek-detail', function () {
    return view('trekking-region-detail-list.everestregion-everest-gokyo-lake-trek-detail');
});
Route::get('/everest-panorama-trek-detail', function () {
    return view('trekking-region-detail-list.everestregion-everest-panorama-trek-detail');
});
Route::get('/holy-mount-lapchi-king-trek-detail', function () {
    return view('trekking-region-detail-list.everestregion-holy-mount-lapchi-king-trek-detail');
});
Route::get('/jiri-to-everest-base-camp-trek-detail', function () {
    return view('trekking-region-detail-list.everestregion-jiri-to-everest-base-camp-trek-detail');
});

Route::get('/kanchenjunga-base-camp-trek-detail', function () {
    return view('trekking-region-detail-list.kanchenjungaregion-kanchenjunga-base-camp-trek-detail');
});
Route::get('/kanchenjunga-north-and-south-face-trek-detail', function () {
    return view('trekking-region-detail-list.kanchenjungaregion-kanchenjunga-north-and-south-face-trek-detail');
});
Route::get('/kanchenjunga-south-face-trek-detail', function () {
    return view('trekking-region-detail-list.kanchenjungaregion-kanchenjunga-south-face-trek-detail');
});

Route::get('/ganesh-himal-trek-detail', function () {
    return view('trekking-region-detail-list.langtangregion-ganesh-himal-trek-detail');
});
Route::get('/ganja-la-pass-trek-detail', function () {
    return view('trekking-region-detail-list.langtangregion-ganja-la-pass-trek-detail');
});
Route::get('/helambu-circuit-trek-detail', function () {
    return view('trekking-region-detail-list.langtangregion-helambu-circuit-trek-detail');
});

Route::get('/limi-valley-trek-detail', function () {
    return view('trekking-region-detail-list.nontouristregion-limi-valley-trek-detail');
});
Route::get('/lower-mustang-trek-detail', function () {
    return view('trekking-region-detail-list.nontouristregion-lower-mustang-trek-detail');
});
Route::get('/makalu-base-camp-trek-detail', function () {
    return view('trekking-region-detail-list.nontouristregion-makalu-base-camp-trek-detail');
});
Route::get('/manslu-circuit-trek-detail', function () {
    return view('trekking-region-detail-list.nontouristregion-manslu-circuit-trek-detail');
});
Route::get('/milke-danda-trek-detail', function () {
    return view('trekking-region-detail-list.nontouristregion-milke-danda-trek-detail');
});
Route::get('/nyinba-valley-trek-detail', function () {
    return view('trekking-region-detail-list.nontouristregion-nyinba-valley-trek-detail');
});
Route::get('/panch-pokhari-trek-detail', function () {
    return view('trekking-region-detail-list.nontouristregion-panch-pokhari-trek-detail');
});
Route::get('/saipal-base-camp-trek-detail', function () {
    return view('trekking-region-detail-list.nontouristregion-saipal-base-camp-trek-detail');
});


Route::get('/classic-laya-trek-detail', function () {
    return view('tour-region-detail-list.bhutantour-classic-laya-trek-detail');
});
Route::get('/druk-path-trek-detail', function () {
    return view('tour-region-detail-list.bhutantour-druk-path-trek-detail');
});
Route::get('/paro-thimpu-tour-detail', function () {
    return view('tour-region-detail-list.bhutantour-paro-thimpu-tour-detail');
});

Route::get('/chardham-yatra-tour-detail', function () {
    return view('tour-region-detail-list.chardhamtour-chardham-yatra-tour-detail');
});

Route::get('/gangtok-darjeeling-tour-detail', function () {
    return view('tour-region-detail-list.gangtoktour-gangtok-darjeeling-tour-detail');
});
Route::get('/gangtok-kalimpong-darjeeling-tour-detail', function () {
    return view('tour-region-detail-list.gangtoktour-gangtok-kalimpong-darjeeling-tour-detail');
});

Route::get('/buddha-darsan-tour-detail', function () {
    return view('tour-region-detail-list.indiatour-buddha-darsan-tour-detail');
});
Route::get('/buddhist-temple-and-east-india-tour-detail', function () {
    return view('tour-region-detail-list.indiatour-buddhist-temple-and-east-india-tour-detail');
});
Route::get('/darjeeling-singalila-ridge-tour-detail', function () {
    return view('tour-region-detail-list.indiatour-darjeeling-singalila-ridge-tour-detail');
});
Route::get('/goa-tour-detail', function () {
    return view('tour-region-detail-list.indiatour-goa-tour-detail');
});
Route::get('/golden-triangle-tour-detail', function () {
    return view('tour-region-detail-list.indiatour-golden-triangle-tour-detail');
});
Route::get('/jewels-of-rajasthan-tour-detail', function () {
    return view('tour-region-detail-list.indiatour-jewels-of-rajasthan-tour-detail');
});
Route::get('/kerela-with-beach-holiday-tour-detail', function () {
    return view('tour-region-detail-list.indiatour-kerela-with-beach-holiday-tour-detail');
});
Route::get('/north-east-india-and-darjeeling-tour-detail', function () {
    return view('tour-region-detail-list.indiatour-north-east-india-and-darjeeling-tour-detail');
});
Route::get('/simla-manali-honeymoon-tour-detail', function () {
    return view('tour-region-detail-list.indiatour-simla-manali-honeymoon-tour-detail');
});
Route::get('/trails-of-buddha-tour-detail', function () {
    return view('tour-region-detail-list.indiatour-trails-of-buddha-tour-detail');
});

Route::get('/holy-mount-kailash-yatra-tour-detail', function () {
    return view('tour-region-detail-list.kailashtour-holy-mount-kailash-yatra-tour-detail');
});
Route::get('/mount-kailash-and-mansarovar-yatra-tour-detail', function () {
    return view('tour-region-detail-list.kailashtour-mount-kailash-and-mansarovar-yatra-tour-detail');
});

Route::get('/chitwan-and-gorakhpur-tour-detail', function () {
    return view('tour-region-detail-list.nepaltour-chitwan-and-gorakhpur-tour-detail');
});
Route::get('/holy-gosaikund-heli-tour-detail', function () {
    return view('tour-region-detail-list.nepaltour-holy-gosaikund-heli-tour-detail');
});
Route::get('/kathmandu-everest-base-camp-tour-detail', function () {
    return view('tour-region-detail-list.nepaltour-kathmandu-everest-base-camp-tour-detail');
});
Route::get('/kathmandu-pokhara-muktinath-tour-detail', function () {
    return view('tour-region-detail-list.nepaltour-kathmandu-pokhara-muktinath-tour-detail');
});
Route::get('/lumbini-pilgrimage-tour-detail', function () {
    return view('tour-region-detail-list.nepaltour-lumbini-pilgrimage-tour-detail');
});
Route::get('/rara-lake-and-gorakhpur-tour-detail', function () {
    return view('tour-region-detail-list.nepaltour-rara-lake-and-gorakhpur-tour-detail');
});

Route::get('/bali-tour-detail', function () {
    return view('tour-region-detail-list.outboundtour-bali-tour-detail');
});
Route::get('/dragon-of-china-tour-detail', function () {
    return view('tour-region-detail-list.outboundtour-dragon-of-china-tour-detail');
});
Route::get('/dubai-tour-detail', function () {
    return view('tour-region-detail-list.outboundtour-dubai-tour-detail');
});
Route::get('/malaysia-and-singapore-tour-detail', function () {
    return view('tour-region-detail-list.outboundtour-malaysia-and-singapore-tour-detail');
});
Route::get('/maldives-tour-detail', function () {
    return view('tour-region-detail-list.outboundtour-maldives-tour-detail');
});

Route::get('/holy-kailash-and-manasarovar-tour-detail', function () {
    return view('tour-region-detail-list.tibettour-holy-kailash-and-manasarovar-tour-detail');
});
Route::get('/lhasa-namtso-lake-tour-detail', function () {
    return view('tour-region-detail-list.tibettour-lhasa-namtso-lake-tour-detail');
});
Route::get('/mount-kailash-inner-parikrama-tour-detail', function () {
    return view('tour-region-detail-list.tibettour-mount-kailash-inner-parikrama-tour-detail');
});
Route::get('/mount-kailash-via-helicopter-tour-detail', function () {
    return view('tour-region-detail-list.tibettour-mount-kailash-via-helicopter-tour-detail');
});
Route::get('/mount-kailah-via-simikot-tour-detail', function () {
    return view('tour-region-detail-list.tibettour-mount-kailah-via-simikot-tour-detail');
});
Route::get('/tibet-motorbike-tour-detail', function () {
    return view('tour-region-detail-list.tibettour-tibet-motorbike-tour-detail');
});