<?php

namespace Database\Seeders;

use App\Models\Estate\Estate;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(EstatesCategoriesSeeder::class);
        $this->call(EstatesSeeder::class);
        $this->call(AdminUserSeeder::class);
    }
}
