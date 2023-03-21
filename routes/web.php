<?php

use Illuminate\Support\Facades\Route;


/// lebih rapi dari sebelum nya admin nya di buat folder
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AdminAbout;
use App\Http\Controllers\admin\AdminAuth;
use App\Http\Controllers\admin\AdminBanner;
use App\Http\Controllers\admin\AdminBlog;
use App\Http\Controllers\admin\AdminDasboard;
use App\Http\Controllers\admin\AdminInformasi;
use App\Http\Controllers\admin\AdminPendaftaran;
use App\Http\Controllers\admin\AdminPesan;
use App\Http\Controllers\admin\AdminFormulir;
use App\Http\Controllers\admin\AdminFoto;
use App\Http\Controllers\AdminDaftarOnline;
use App\Http\Controllers\AdminSiswa;
use App\Http\Controllers\Home;
use App\Http\Controllers\HomeContact;
use App\Http\Controllers\HomeDaftarOnline;
use App\Http\Controllers\HomeFoto;
use App\Http\Controllers\HomePendaftaran;
use App\Http\Controllers\HomeSiswa;

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


Route::get('/formulir', [Home::class, 'formulir']);

Route::get('/foto', [HomeFoto::class, 'index']);
Route::get('/show/{id}', [HomeFoto::class,'detail']);



// Route::get('/informasi', [HomeInfoController::class, 'index']);
// Route::get('/informasi/detail/{id}', [HomeInfoController::class, 'detail']);
// Route::get('/informasi', [HomeInfoController::class, 'index']);



Route::get('/siswa', [HomeSiswa::class, 'index']);
Route::post('/siswa/send', [HomeSiswa::class, 'send']);


// Route::get('/daftar', [HomeDaftar::class, 'index']);
// Route::post('/daftar/send', [HomeDaftar::class, 'send']);

Route::get('/contact', [HomeContact::class, 'index']);
Route::post('/contact/send', [HomeContact::class, 'send']);


Route::get('/pendaftaran', [HomePendaftaran::class, 'index']);
Route::post('/pendaftaran/send', [HomePendaftaran::class, 'send']);

Route::get('/daftar_online', [HomeDaftarOnline::class, 'index']);
Route::post('/daftar_online/send', [HomeDaftarOnline::class, 'send']);


Route::get('/pendaftaran-export', [AdminPendaftaran::class, 'export']);
Route::get('/daftar_online-export', [AdminDaftarOnline::class, 'export']);



Route::get('/about', function () {
    $data = [
        'content'=> 'home/about/index'
    ];
    return view('home.layouts.wrapper',$data);
});

Route::get('/sukses', function () {
    $data = [
        'content'=> 'home/sukses/index'
    ];
    return view('home.layouts.wrapper',$data);
});

Route::get('/alamat', function () {
    $data = [
        'content'=> 'home/alamat/index'
    ];
    return view('home.layouts.wrapper',$data);
});

Route::get('/prosedur', function () {
    $data = [
        'content'=> 'home/prosedur/index'
    ];
    return view('home.layouts.wrapper',$data);
});


// Route::get('/blog', function () {
//     $data = [
//         'content'=> 'home/blog/index'
//     ];
//     return view('home.layouts.wrapper',$data);
// });
Route::get('/login', [AdminAuth::class, 'index'])->name('login');
Route::post('/login/do', [AdminAuth::class, 'doLogin']);

Route::get('/logout', [AdminAuth::class, 'logout']);




// Admin
Route::prefix('/admin')->middleware('auth')->group(function (){
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

        Route::resource('/siswa', AdminSiswa::class);


    // Route::resource('/pesan/detail', [AdminPesan::class, 'detail']);


    Route::resource('/daftar_online', AdminDaftarOnline::class);

    Route::resource('/banner', AdminBanner::class);
    Route::resource('/informasi', AdminInformasi::class);
    Route::resource('/blog', AdminBlog::class);
    Route::resource('/formulir', AdminFormulir::class);
    Route::resource('/foto', AdminFoto::class);










});