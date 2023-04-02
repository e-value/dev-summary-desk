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

        // チェックをした法律を検索
        if(is_array($request->input('law_ids'))) {
            $query->where(function($query) use($request){
                foreach($request->input('law_ids') as $law_id){
                    $query->orWhere('law_id',$law_id);
                }
            });
        }

        // 日時で検索 from
        if(!empty($request->from_date)) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        // 日時で検索 until
        if(!empty($request->until_date)) {
            $query->whereDate('created_at', '<=', $request->until_date);
        }
    
        $revisionLaws = $query->paginate(10);

        // 法分類: チェックボックスの選択肢に使用
        // ※注意！
        // カテゴリーが重複するのでuniqueにする
        $law_categories = $user->contractedLawCategories->unique();


        return view('top', compact('revisionLaws', 'law_categories'));
    }
}
