<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('sliders')->truncate();
        DB::table('categories')->truncate();
        DB::table('products')->truncate();
        \App\Models\User::factory(10)->create();
        \App\Models\Slider::factory(3)->create();
        \App\Models\Category::factory(7)->create();
        \App\Models\Product::factory(20)->create();
    }
}
