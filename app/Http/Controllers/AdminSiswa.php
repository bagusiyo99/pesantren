<?php

namespace App\Http\Controllers;

use App\Models\SiswaBaru;
use Illuminate\Http\Request;

class AdminSiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Daftar',
            'siswa' => SiswaBaru::get(),
            'content' => 'admin/siswa/index'
        ];
        return view ('admin.layouts.wrapper', $data );
    }



    //     public function export() 
    // {
    //     return Excel::download(new PendaftaransExport ,'pendaftaran-'.Carbon::now()->timestamp. '.xlsx');
    // }


}