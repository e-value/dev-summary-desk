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
     * Run the database seeds.
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

        $categories = LawCategory::all();
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
