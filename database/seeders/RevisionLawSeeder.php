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
     * 
     * idが1~5の法律それぞれに対して、改正情報を10個登録する。
     * 
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<25; $i++)
        {
            RevisionLaw::factory(10)->create([
                'law_id' => $i+1,
                'issue_date' => DateTime::dateTimeThisDecade(),
                'enforcement_date' => DateTime::dateTimeThisDecade(),
                'status' => '改正',
                'point' => ($i+1).'ダミーダミーダミーダミー',
                'content' => ($i+1).'ダミーダミーダミーダミー'
            ]);
        }
    }
}
