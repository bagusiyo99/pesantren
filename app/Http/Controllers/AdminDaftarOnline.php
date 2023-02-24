<?php

namespace App\Http\Controllers;

use App\Models\DaftarOnline;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminDaftarOnline extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen DaftarOnline',
            'daftar_online' => DaftarOnline::get(),
            'content' => 'admin/daftar_online/index'
        ];
        return view ('admin.layouts.wrapper', $data );
    }

    public function show ($id)
    {
    $data = [
        'daftar_online' => DaftarOnline::find($id),
        'content'=> 'admin/daftar_online/show'
    ];
    return view('admin.layouts.wrapper',$data);
    }

        public function destroy($id)
    {
        $daftar_online = DaftarOnline::find ($id);


        Alert::success('sukses', 'data berhasil dihapus');
        $daftar_online->delete();
        return redirect ('/admin/daftar_online');
        
    }


    

}
