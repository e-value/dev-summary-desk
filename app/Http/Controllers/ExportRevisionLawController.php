<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\RevisionLawsExport;
use Maatwebsite\Excel\Facades\Excel;


class ExportRevisionLawController extends Controller
{
    public function export()
    {
        return Excel::download(new RevisionLawsExport, 'revisionLaws.xlsx'); 
    }
}
