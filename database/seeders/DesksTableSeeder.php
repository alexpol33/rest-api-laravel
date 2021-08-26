<?php

namespace Database\Seeders;

use App\Models\Desk;
use Illuminate\Database\Seeder;

class DesksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Desk::factory()
            ->count(50)->create();
    }
}
