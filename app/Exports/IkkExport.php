<?php

namespace App\Exports;

use App\Models\Ikk;
use Maatwebsite\Excel\Concerns\FromCollection;

class IkkExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ikk::all();
    }
}
