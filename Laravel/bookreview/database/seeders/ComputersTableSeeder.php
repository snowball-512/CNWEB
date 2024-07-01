<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<10; $i++){
            DB::table('computers')->insert([
                'computer_name' => $faker->word(), 
                'model' => $faker->sentence(),
                'operating_system' => $faker->word(),
                'processor' => $faker->word,
                'memory' => $faker->numberBetween('10','20'),
                'available' => $faker->boolean()
            ]);
        }
    }
}
