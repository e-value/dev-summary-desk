<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Law;

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

        foreach($names as $name)
        {
            Law::create([
                'name' => $name
            ]);
        }
    }
}
