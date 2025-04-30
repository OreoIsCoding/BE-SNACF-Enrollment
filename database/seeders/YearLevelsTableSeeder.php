<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\YearLevel;

class YearLevelsTableSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 4) as $year) {
            YearLevel::create(['year' => $year]);
        }
    }
}
