<?php

/// dua komponen jika di buat folder
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPendaftaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Pendaftaran',
            'pendaftaran' => Pendaftaran::get(),
            'content' => 'admin/pendaftaran/index'
        ];
        return view ('admin.layouts.wrapper', $data );
    }

    public function show ($id)
    {
    $data = [
        'pendaftaran' => Pendaftaran::find($id),
        'content'=> 'admin/pendaftaran/show'
    ];
    return view('admin.layouts.wrapper',$data);
    }

        public function destroy($id)
    {
        $pendaftaran = Pendaftaran::find ($id);


        Alert::success('sukses', 'data berhasil dihapus');
        $pendaftaran->delete();
        return redirect ('/admin/pendaftaran');
        
    }

}

