<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LawCategory;
use App\Models\Law;
use App\Models\RevisionLaw;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $law_categories = LawCategory::all();
        
        $query = RevisionLaw::query();

        if(is_array($request->input('law_ids'))) {
            $query->where(function($query) use($request){
                foreach($request->input('law_ids') as $law_id){
                    $query->orWhere('law_id',$law_id);
                }
            });
        }

        $revision_laws = $query->paginate(10);

        return view('top', compact('law_categories','revision_laws'));
    }
}
