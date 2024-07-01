<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Fetch existing TypesID values from the types table
        $typesIds = DB::table('types')->pluck('TypesID')->toArray();

        for ($i = 0; $i < 50; $i++) {
            DB::table('students')->insert([
                'TypesID' => $faker->randomElement($typesIds), // Use an existing TypesID
                'StudentName' => $faker->name,
                'StudentBirthday' => $faker->date,
                'StudentGender' => $faker->randomElement(['0', '1']),
                'StudentAddress' => $faker->address,
                'StudentPhoneNumber' => $faker->phoneNumber,
            ]);
        }
    }
}
