<?php

namespace App\Http\Controllers;

use App\Models\DaftarOnline;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeDaftarOnline extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index ()
    {
    $data = [
        'content'=> 'home/daftar_online/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

         function send  (Request $request)
    {
        $data = $request -> validate ([
            'nisn' => 'required',
            'nik' => 'required',
            'nama_siswa' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required ',
            'alamat' => 'required',
            'hp' => 'required ',
            'gambar' => 'required',
            // 'berkas' => 'required',

            'nama_ayah' => 'required ',
            'nama_ibu' => 'required ',
            'pekerjaan_ayah' => 'required ',
            'pekerjaan_ibu' => 'required ',
            'pendidikan_ayah' => 'required ',
            'pendidikan_ibu' => 'required ',
            'nohp_ayah' => 'required ',
            'nohp_ibu' => 'required ',
            'penghasilan_ayah' => 'required ',
            'file' => 'required ',
            'penghasilan_ibu' => 'required ',


    //     ],
    //   [
    //             'nama.required'=> 'Nama Lengkap WAJIB DIISI',
    //             'email.required'=> 'Email WAJIB DIISI',
    //             'alamat.required'=> 'Alamat WAJIB DIISI',
    //             'pesan.required'=> 'Deskripsi WAJIB DIISI',
    //             'gambar.required'=> 'Bulti Pembayaran WAJIB DIISI',
    //             'telpon.required'=> 'No Telpon Atau Whatsaap WAJIB DIISI',
            ]);


                // upload gambar
        if ($request -> hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/daftar_online/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = null;
        }

        // if ($request -> hasFile('berkas')) {
        //     $berkas = $request->file('berkas');
        //     $file_name = time ().'-'. $berkas -> getClientOriginalName ();

        //     $storage = 'uploads/daftar_online/';
        //     $berkas->move ($storage, $file_name);
        //     $data ['berkas'] =$storage .$file_name;
        // }else {
        //     $data ['berkas'] = null;
        // }


         // upload file
        if ($request -> hasFile('file')) {
            $file = $request->file('file');
            $file_name = time ().'-'. $file -> getClientOriginalName ();

            $storage = 'uploads/daftar_online/';
            $file->move ($storage, $file_name);
            $data ['file'] =$storage .$file_name;
        }else {
            $data ['file'] = null;
        }

        DaftarOnline::create($data);
        Alert::success('sukses', 'Pesan berhasil dikirim');
        return redirect('/daftar_online');
        

    }

}
