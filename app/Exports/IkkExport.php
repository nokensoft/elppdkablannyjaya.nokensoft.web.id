<?php

namespace App\Exports;

use App\Models\Ikk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class IkkExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ikk::all();
    }

    public function map($row): array
    {
        return [
            $row->no_ikk,
            $row->urusan,
            $row->ikk,
            $row->rumus,
            $row->ket_jml1,
            $row->jml1,
            $row->ket_jml2,
            $row->jml2,
            $row->capaian_kinerja,
            $row->keterangan,
            $row->status,
        ];
    }

    public function headings(): array
    {
        return [
            'Nomor IKK',
            'Urusan',
            'IKK',
            'Rumus',
            'Keterang Nilai 1',
            'Nilai 1',
            'Keterang Nilai 2',
            'Nilai 2',
            'Capaian Kerja',
            'Keterang',
            'Status'
        ];
    }
}
