<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class cardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::factory()
            ->count(50)->create();
    }
}