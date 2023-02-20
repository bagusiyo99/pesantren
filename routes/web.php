<?php

use Illuminate\Support\Facades\Route;


/// lebih rapi dari sebelum nya admin nya di buat folder
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AdminAbout;
use App\Http\Controllers\admin\AdminAsus;
use App\Http\Controllers\admin\AdminAuth;
use App\Http\Controllers\admin\AdminBanner;
use App\Http\Controllers\admin\AdminBlog;
use App\Http\Controllers\admin\AdminCasing;
use App\Http\Controllers\admin\AdminCharger;
use App\Http\Controllers\admin\AdminDasboard;
use App\Http\Controllers\admin\AdminInformasi;
use App\Http\Controllers\admin\AdminPendaftaran;
use App\Http\Controllers\admin\AdminPesan;

use App\Http\Controllers\Home;
use App\Http\Controllers\HomeAksesoris;
use App\Http\Controllers\HomeContact;
use App\Http\Controllers\HomeHandphone;
use App\Http\Controllers\HomeInfoController;
use App\Http\Controllers\HomePendaftaran;

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


Route::get('/blog', [Home::class, 'blog']);
Route::get('/blog/{id}', [Home::class, 'detailBlog']);


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




Route::get('/contact', [HomeContact::class, 'index']);
Route::post('/contact/send', [HomeContact::class, 'send']);


Route::get('/pendaftaran', [HomePendaftaran::class, 'index']);
Route::post('/pendaftaran/send', [HomePendaftaran::class, 'send']);


Route::get('/about', function () {
    $data = [
        'content'=> 'home/about/index'
    ];
    return view('home.layouts.wrapper',$data);
});


// Route::get('/blog', function () {
//     $data = [
//         'content'=> 'home/blog/index'
//     ];
//     return view('home.layouts.wrapper',$data);
// });

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
    Route::resource('/pendaftaran', AdminPendaftaran::class);

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
    Route::resource('/blog', AdminBlog::class);










});