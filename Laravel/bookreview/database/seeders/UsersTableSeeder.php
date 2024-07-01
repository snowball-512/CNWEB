<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            DB::table('users')->insert([
                'name' => $faker->name, 
                'email'=>$faker->email,
                'email_verified_at'=>$faker->date,
                'password'=>$faker->password,
                'remember_token'=>$faker->sentence,
                
            ]);
        }
    }
}
