<?php

namespace App\Exports;

use App\Models\RevisionLaw;
use Maatwebsite\Excel\Concerns\FromCollection;

class RevisionLawsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RevisionLaw::all();
    }
}
