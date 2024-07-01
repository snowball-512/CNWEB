<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<10; $i++){
            DB::table('types')->insert([
                'TypeName' => $faker->word,
                'TypeDescription' => $faker->sentence,
                // 'origin' =>$faker->word,
                // 'year'=>$faker->year,
            ]);
        }
    }
}
