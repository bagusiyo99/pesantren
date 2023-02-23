<?php

namespace App\Http\Controllers;

use App\Models\SiswaBaru;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeSiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index ()
    {
    $data = [
        'content'=> 'home/siswa/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

         function send  (Request $request)
    {
        $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',
            'file' => 'required',
        ],
      [
                'judul.required'=> 'Judul Lengkap WAJIB DIISI',
                'deskripsi.required'=> 'Deskripsi WAJIB DIISI',
                'file.required'=> 'File Pembayaran WAJIB DIISI',

            ]);
       
     
        // upload file
        if ($request -> hasFile('file')) {
            $file = $request->file('file');
            $file_name = time ().'-'. $file -> getClientOriginalName ();

            $storage = 'uploads/siswa/';
            $file->move ($storage, $file_name);
            $data ['file'] =$storage .$file_name;
        }else {
            $data ['file'] = null;
        }

        SiswaBaru::create($data);
        Alert::success('sukses', 'Pesan berhasil dikirim');
        return redirect('/siswa');
        

    }

}
