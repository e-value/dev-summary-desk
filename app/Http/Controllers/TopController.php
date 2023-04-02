<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RevisionLaw;

class TopController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = Auth()->user();

        // 契約している法律のIDを取得
        $contractedLawIds = $user->contractedLaws()->pluck('laws.id');

        // 改正情報を取得
        $query = RevisionLaw::whereIn('law_id', $contractedLawIds);

        if(is_array($request->input('law_ids'))) {
            $query->where(function($query) use($request){
                foreach($request->input('law_ids') as $law_id){
                    $query->orWhere('law_id',$law_id);
                }
            });
        }
    
        $revisionLaws = $query->paginate(10);

        // 法分類: チェックボックスの選択肢に使用
        // ※注意！
        // カテゴリーが重複するのでuniqueにする
        $law_categories = $user->contractedLawCategories->unique();


        return view('top', compact('revisionLaws', 'law_categories'));
    }
}
