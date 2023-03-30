<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LawCategory;
use App\Models\Law;

class TopController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $law_categories = LawCategory::all();
        return view('top', compact('law_categories'));
    }
}
