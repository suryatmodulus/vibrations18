<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class RegExportSheets implements WithMultipleSheets
{
    use Exportable;
    /**
     * @return array
     */
    public function sheets(): array
    {
        $events = array("regional_vocal_solo","eastern_group","stand_up_comedy","skit","singing_group_solo","cooking_without_fire","treasure_hunt","dsi_super_minute","hogathon","solo_western_bollywood","solo_eastern_classical","mobile_photography","story_telling","war_of_emcees","kannada_antakshari","rubiks_cube","pubg","rangoli","group_eastern_classical","mr_ms_vibrations","group_western_bollywood","fashion_show","the_literary_triathlon","lit_hunt","mad_ads","improv","pick_and_speak","western_group","debate","dsi_minute","blackout_poetry","western_vocal_solo","instrument_solo","talent_show","sketcho_mania_sketching","gyaana_prathib_sparde","aquarelle_watercolour_painting","fix_the_blot_ink_art","dance_group_solo");
        $sheets = [];

        foreach ($events as $event) {
            $sheets[] = new RegExportEventPerSheet($event);
        }

        return $sheets;
    }
}
