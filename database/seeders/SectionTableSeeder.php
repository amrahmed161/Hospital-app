<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\section;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\section::factory()->count(6)->create();
    }
}
