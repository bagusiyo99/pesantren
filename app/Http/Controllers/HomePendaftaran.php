<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomePendaftaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index ()
    {
    $data = [
        'content'=> 'home/pendaftaran/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

         function send  (Request $request)
    {
        $data = $request -> validate ([
            'nama' => 'required',
            'email' => 'required ',
            'alamat' => 'required',
            'telpon' => 'required ',
            'pesan' => 'required ',
            'gambar' => 'required',
        ],
      [
                'nama.required'=> 'Nama Lengkap WAJIB DIISI',
                'email.required'=> 'Email WAJIB DIISI',
                'alamat.required'=> 'Alamat WAJIB DIISI',
                'pesan.required'=> 'Deskripsi WAJIB DIISI',
                'gambar.required'=> 'Bulti Pembayaran WAJIB DIISI',
                'telpon.required'=> 'No Telpon Atau Whatsaap WAJIB DIISI',

            ]);
       

                // upload gambar
        if ($request -> hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/pendaftaran/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = null;
        }

        Pendaftaran::create($data);
        Alert::success('sukses', 'Pesan berhasil dikirim');
        return redirect('/pendaftaran');
        

    }

}
