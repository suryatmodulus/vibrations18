<?php

namespace App\Exports;

use App\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Registration::all();
    }
}
