<?php

namespace Database\Seeders;

use App\Models\Estate\Estate;
use Illuminate\Database\Seeder;

class EstatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estate::factory()->count(50)->create();
    }
}
