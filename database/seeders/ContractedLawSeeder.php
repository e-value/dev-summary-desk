<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\LawCategory;
use App\Models\ContractedLaw;

use Carbon\Carbon;

class ContractedLawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        $law_categories = LawCategory::all();

        foreach($law_categories as $category) 
        {
            foreach($category->laws as $law) 
            {
                ContractedLaw::factory()->create([
                    'user_id' => $user->id,
                    'law_id' => $law->id,
                    'category_id' => $category->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
