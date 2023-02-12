<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminAbout;
use App\Http\Controllers\AdminAsus;
use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\AdminBanner;
use App\Http\Controllers\AdminCasing;
use App\Http\Controllers\AdminCharger;
use App\Http\Controllers\AdminDasboard;
use App\Http\Controllers\AdminHplain;
use App\Http\Controllers\AdminInfinix;
use App\Http\Controllers\AdminInformasi;
use App\Http\Controllers\AdminIphone;
use App\Http\Controllers\AdminLainaksesoris;
use App\Http\Controllers\AdminOppo;
use App\Http\Controllers\AdminPb;
use App\Http\Controllers\AdminPesan;
use App\Http\Controllers\AdminPromo;
use App\Http\Controllers\AdminSamsung;
use App\Http\Controllers\AdminUsb;
use App\Http\Controllers\AdminVivo;
use App\Http\Controllers\AdminXiomi;
use App\Http\Controllers\Home;
use App\Http\Controllers\HomeAksesoris;
use App\Http\Controllers\HomeContact;
use App\Http\Controllers\HomeHandphone;
use App\Http\Controllers\HomeInfoController;

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

Route::get('/', [Home::class, 'index']);
Route::get('/detail/{id}', [Home::class, 'detail']);
Route::get('/informasi/{id}', [Home::class, 'informasi']);


// Route::get('/informasi', [HomeInfoController::class, 'index']);
// Route::get('/informasi/detail/{id}', [HomeInfoController::class, 'detail']);
// Route::get('/informasi', [HomeInfoController::class, 'index']);


Route::get('/samsung', [HomeHandphone::class, 'index']);
Route::get('/samsung/detail/{id}', [HomeHandphone::class, 'detail']);
Route::get('/oppo', [HomeHandphone::class, 'oppo']);
Route::get('/oppo/detail/{id}', [HomeHandphone::class, 'detailoppo']);
Route::get('/vivo', [HomeHandphone::class, 'vivo']);
Route::get('/vivo/detail/{id}', [HomeHandphone::class, 'detailvivo']);
Route::get('/xiomi', [HomeHandphone::class, 'xiomi']);
Route::get('/xiomi/detail/{id}', [HomeHandphone::class, 'detailxiomi']);
Route::get('/asus', [HomeHandphone::class, 'asus']);
Route::get('/asus/detail/{id}', [HomeHandphone::class, 'detailasus']);
Route::get('/infinix', [HomeHandphone::class, 'infinix']);
Route::get('/infinix/detail/{id}', [HomeHandphone::class, 'detailinfinix']);
Route::get('/iphone', [HomeHandphone::class, 'iphone']);
Route::get('/iphone/detail/{id}', [HomeHandphone::class, 'detailiphone']);
Route::get('/hplain', [HomeHandphone::class, 'hplain']);
Route::get('/hplain/detail/{id}', [HomeHandphone::class, 'detailhplain']);


Route::get('/charger', [HomeAksesoris::class, 'index']);
Route::get('/charger/detail/{id}', [HomeAksesoris::class, 'detail']);
Route::get('/casing', [HomeAksesoris::class, 'casing']);
Route::get('/casing/detail/{id}', [HomeAksesoris::class, 'detailcasing']);
Route::get('/pb', [HomeAksesoris::class, 'pb']);
Route::get('/pb/detail/{id}', [HomeAksesoris::class, 'detailpb']);
Route::get('/usb', [HomeAksesoris::class, 'usb']);
Route::get('/usb/detail/{id}', [HomeAksesoris::class, 'detailusb']);
Route::get('/lainaksesoris', [HomeAksesoris::class, 'lainaksesoris']);
Route::get('/lainaksesoris/detail/{id}', [HomeAksesoris::class, 'detaillainaksesoris']);


Route::get('/contact', [HomeContact::class, 'index']);
Route::post('/contact/send', [HomeContact::class, 'send']);


Route::get('/about', function () {
    $data = [
        'content'=> 'home/about/index'
    ];
    return view('home.layouts.wrapper',$data);
});


Route::get('/login', [AdminAuth::class, 'index']);
Route::post('/login/do', [AdminAuth::class, 'doLogin']);

Route::get('/logout', [AdminAuth::class, 'logout']);





// Admin
Route::prefix('/admin')->group(function (){
        Route::get('/dasboard', [AdminDasboard::class, 'index']);


    //  Route::get('/dasboard', function () {
    //     $data = [
    //     'title' => 'dasboard',
    //     'content'=> 'admin/dasboard/index'
    //  ];

    //     return view ('admin.layouts.wrapper', $data);
    // });

    
    // Route::get('/pesan', [AdminPesan::class, 'index']);
    // Route::put('/pesan/detail', [AdminPesan::class, 'detail']);

    Route::resource('/about', AdminAbout::class);
    Route::resource('/pesan', AdminPesan::class);
    // Route::resource('/pesan/detail', [AdminPesan::class, 'detail']);


    Route::resource('/user', AdminUserController::class);
    Route::resource('/asus', AdminAsus::class);
    Route::resource('/samsung', AdminSamsung::class);
    Route::resource('/vivo', AdminVivo::class);
    Route::resource('/oppo', AdminOppo::class);
    Route::resource('/xiomi', AdminXiomi::class);
    Route::resource('/iphone', AdminIphone::class);
    Route::resource('/infinix', AdminInfinix::class);
    Route::resource('/hplain', AdminHplain::class);
    Route::resource('/promo', AdminPromo::class);
    Route::resource('/charger', AdminCharger::class);
    Route::resource('/casing', AdminCasing::class);
    Route::resource('/pb', AdminPb::class);
    Route::resource('/usb', AdminUsb::class);
    Route::resource('/lainaksesoris', AdminLainaksesoris::class);
    Route::resource('/banner', AdminBanner::class);
    Route::resource('/informasi', AdminInformasi::class);










});