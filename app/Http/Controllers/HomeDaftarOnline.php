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
            'nisn' => 'required|max:12',
            'nik' => 'required|max:12',
            'nama_siswa' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required ',
            'alamat' => 'required',
            'hp' => 'required|max:13 ',
            'gambar' => 'required|file|max:2048',
            'berkas' => 'required',

            'nama_ayah' => 'required ',
            'nama_ibu' => 'required ',
            'pekerjaan_ayah' => 'required ',
            'pekerjaan_ibu' => 'required ',
            'pendidikan_ayah' => 'required ',
            'pendidikan_ibu' => 'required ',
            'nohp_ayah' => 'required|max:13 ',
            'nohp_ibu' => 'required|max:13',
            'penghasilan_ayah' => 'required ',
            'file' => 'required ',
            'penghasilan_ibu' => 'required ',

        ],
      [
                'nisn.required'=> 'Tidak Boleh Kosong',
                'nik.required'=> 'Tidak Boleh Kosong',
                'nama_siswa.required'=> 'Tidak Boleh Kosong',
                'jk.required'=> 'Tidak Boleh Kosong',
                'tempat_lahir.required'=> 'Tidak Boleh Kosong',
                'tanggal_lahir.required'=> 'Tidak Boleh Kosong',
                'hp.required'=> 'Tidak Boleh Kosong',
                'berkas.required'=> 'Tidak Boleh Kosong',
                'email.required'=> 'Tidak Boleh Kosong',
                'alamat.required'=> 'Tidak Boleh Kosong',
                'gambar.required'=> 'Tidak Boleh Kosong dan tidak boleh lebih dari 2mb',
                'nama_ayah.required'=> 'Tidak Boleh Kosong',
                'nama_ibu.required'=> 'Tidak Boleh Kosong',
                'pekerjaan_ayah.required'=> 'Tidak Boleh Kosong',
                'pekerjaan_ibu.required'=> 'Tidak Boleh Kosong',
                'pendidikan_ayah.required'=> 'Tidak Boleh Kosong',
                'pendidikan_ibu.required'=> 'Tidak Boleh Kosong',
                'nohp_ayah.required'=> 'Tidak Boleh Kosong',
                'nohp_ibu.required'=> 'Tidak Boleh Kosong',
                'penghasilan_ayah.required'=> 'Tidak Boleh Kosong',
                'file.required'=> 'Tidak Boleh Kosong',
                'penghasilan_ibu.required'=> 'Tidak Boleh Kosong',
                'berkas.required'=> 'Tidak Boleh Kosong',
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

            if ($request -> hasFile('berkas')) {
                $berkas = $request->file('berkas');
                $file_name = time ().'-'. $berkas -> getClientOriginalName ();

                $storage = 'uploads/daftar_online/';
                $berkas->move ($storage, $file_name);
                $data ['berkas'] =$storage .$file_name;
            }else {
                $data ['berkas'] = null;
            }


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
        return redirect('/sukses');
        

    }

}
