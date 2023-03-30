<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\RevisionLaw;

class RevisionLawsImport implements ToCollection,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        dd($collection);
        return RevisionLaw::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            '詳細',
        ];
    }

    public function map($row): array
    {
        $data = [
            $row->id,
            $row->content,
        ];
        dd($data);

        return $data;
    }
}
