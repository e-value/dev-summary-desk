<?php

namespace Database\Seeders;

use App\Models\LawCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LawCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            '分類1',
            '分類2',
            '分類3',
            '分類4',
            '分類5'
        ];
        
        foreach($names as $name)
        {
            LawCategory::create([
                'name' => $name,
            ]);
        }
    }
}
