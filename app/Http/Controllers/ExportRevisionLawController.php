<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\RevisionLawsImport;
use Maatwebsite\Excel\Facades\Excel;


class ExportRevisionLawController extends Controller
{
    public function export()
    {
        return Excel::download(new RevisionLawsImport, 'revisionLaws.xlsx');
    }
}
