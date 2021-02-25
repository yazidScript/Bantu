<?php

namespace App\Exports;

use App\Donatur;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;


class DonaturExport implements FromCollection, WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Donatur::all();
    }

    public function map($donatur): array
    {
        return [
            $donatur->id,
            $donatur->post_id,
            $donatur->email,
            $donatur->namalengkap,
            $donatur->notlp,
            $donatur->metodebayar,
            $donatur->nominal,
            $donatur->status
        ];
    }
    public function headings(): array
   {
       return [
           'ID',
           'Donasi_ID',
           'Email',
           'Nama Lengkap',
           'No Telephone',
           'Metode Bayar',
           'Nominal',
           'Status'
       ];
   }

}
