<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RevisionLaw;

class TopController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = Auth()->user();
        $law_categories = $user->contractedLawCategories;
        
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
