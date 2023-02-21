<?php

namespace App\Exports;

use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PendaftaransExport implements FromQuery, WithMapping ,WithHeadings
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
        return Pendaftaran::query();
    }

        public function map($pendaftaran): array
    {
        return [
            $pendaftaran->id,
            $pendaftaran->nama,
            $pendaftaran->email,
            $pendaftaran->telpon,
            $pendaftaran->alamat,
            $pendaftaran->pesan,
            $pendaftaran->created_at->format('d-F-Y ') ,


        ];
    }

       public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Email',
            'Whatsaap atau No telpon',
            'Alamat',
            'Pesan',
            'Waktu Pendaftaran',

        ];
    }

}
