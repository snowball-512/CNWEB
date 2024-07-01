<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdditionalCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            CategoriesTableSeeder::class,
            AdditionalCategoriesSeeder::class,
            // Add more seeders if you have
        ]);
    }
}
