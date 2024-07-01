<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
for($i=0; $i<10; $i++){
    DB::table('documents')->insert([
        'tentailieu' => $faker->word,
        'tacgia' => $faker->word,
        'mota' => $faker->realText(),
    ]);
}
    }
}
