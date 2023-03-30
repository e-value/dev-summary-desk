<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Law;
use App\Models\LawCategory;
use App\Models\LawCateogry;

class LawSeeder extends Seeder
{
    /**
     * 5つの方分類にそれぞれに対して法律を5つの法律、計25個の法律学生される
     * 分類1_a条, 分類1_b条...分類1_e条
     * 分類2_a条, 分類2_b条...分類2_e条
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'a条',
            'b条',
            'c条',
            'd条',
            'e条',
        ];

        // 5つの法分類を取得
        $categories = LawCategory::all();
        
        // 法分類一つ一つに対して、5個の法律を作成
        foreach($categories as $category)
        {
            foreach($names as $name)
            {
                Law::create([
                    'category_id' => $category->id,
                    'name' => $category->name.'_'.$name
                ]);
            }
        }
        
    }
}
