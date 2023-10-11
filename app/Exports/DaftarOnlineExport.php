<?php

namespace App\Exports;

use App\Models\DaftarOnline;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class DaftarOnlineExport implements FromQuery, WithMapping ,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Pendaftaran::all();
    // }

      use Exportable;

    public function query()
    {
        return DaftarOnline::query();
    }

        public function map($daftar_online): array
    {
        return [
            // $daftar_online->id,
            $daftar_online->nama_siswa,
            $daftar_online->email,
            $daftar_online->hp,
            $daftar_online->alamat,
            $daftar_online->jk,
            $daftar_online->created_at->format('d-F-Y ') ,


        ];
    }

       public function headings(): array
    {
        return [
            
            'Nama',
            'Email',
            'Whatsaap atau No telpon',
            'Alamat',
            'Jenis Kelamin',
            'Waktu Pendaftaran',

        ];
    }

}
