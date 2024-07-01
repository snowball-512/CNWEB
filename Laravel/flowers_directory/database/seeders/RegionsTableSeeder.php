<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class RegionsTableSeeder extends Seeder
{
   

    public function run(): void
    {
        $faker = Faker::create();
        $flowerids = DB::table('flowers')->pluck('id')->toArray();

        for ($i = 0; $i < 50; $i++) {
            DB::table('regions')->insert([
                'flower_id' => $faker->randomElement($flowerids), // Sử dụng flower_id thay vì id
                'region_name' => $faker->city, // Sử dụng city của Faker cho tên khu vực
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }


    }
}
