<?php

namespace Database\Seeders;

use App\Models\DeskList;
use Illuminate\Database\Seeder;

class DeskListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeskList::factory()
            ->count(50)->create();
    }
}
