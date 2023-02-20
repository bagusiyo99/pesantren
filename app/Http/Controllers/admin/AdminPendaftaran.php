<?php

/// dua komponen jika di buat folder
namespace App\Http\Controllers\admin;

use App\Exports\PendaftaransExport;
use App\Http\Controllers\Controller;

use App\Models\Pendaftaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
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


        public function export() 
    {
        return Excel::download(new PendaftaransExport ,'pendaftaran-'.Carbon::now()->timestamp. '.xlsx');
    }


}

