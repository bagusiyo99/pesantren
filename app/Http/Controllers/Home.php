<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Informasi;
use App\Models\Promo;
use Illuminate\Http\Request;

class Home extends Controller
{
    function index (){
    $data = [
        // 'about' => About::get(),
        'about' => About::limit(1)->get(),
        // 'promo' => Promo::paginate(4),
        'informasi' => Informasi::paginate(4),
        'banner' => Banner::get(),



        'content'=> 'home/home/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

    //     public function detail($id)
    // {
    // $data = [
    //     'promo' => Promo::find($id),
    //     'content'=> 'home/home/detail'
    // ];
    // return view('home.layouts.wrapper',$data);
    // }


        public function informasi($id)
    {
    $data = [
        'informasi' => Informasi::find($id),
        'content'=> 'home/home/informasi'
    ];
    return view('home.layouts.wrapper',$data);
    }
}