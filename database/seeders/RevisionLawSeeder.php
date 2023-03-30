<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\RevisionLaw;
use Carbon\Carbon;
use Faker\Provider\DateTime;

class RevisionLawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<5; $i++)
        {
            RevisionLaw::factory(10)->create([
                'law_id' => $i+1,
                'issue_date' => DateTime::dateTimeThisDecade(),
                'enforcement_date' => DateTime::dateTimeThisDecade(),
            ]);
        }
    }
}
