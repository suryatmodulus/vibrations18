<?php

namespace App\Exports;

use App\Registration;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;

class RegExportEventPerSheet implements FromQuery, WithTitle
{
    private $event;

    public function __construct(string $event)
    {
        $this->event = $event;
    }

    /**
     * @return Builder
     */
    public function query()
    {
        return Registration::select ('name','usn','email','mobile','category','event','created_at')->where('event', $this->event);
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return ucwords(implode(" ",explode("_",$this->event)));
    }
}