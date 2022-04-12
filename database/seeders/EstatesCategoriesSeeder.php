<?php

namespace Database\Seeders;

use App\Models\Estate\Category;
use Illuminate\Database\Seeder;

class EstatesCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->count(4)->create();
    }
}
