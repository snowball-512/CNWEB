<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class FlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<10; $i++){
            DB::table('flowers')->insert([
                'name' => $faker->word, // Tên loài hoa ngẫu nhiên
                'image_url' => $faker->imageUrl(640, 480, 'flowers', true), // Đường dẫn ảnh ngẫu nhiên
                'created_at' => now(),
                'updated_at' => now(),
                'description' => $faker->sentence(),
            ]);
        }
        // $faker = Faker::create();
        // $flowers = DB::table('flowers')->get(); // Lấy danh sách các hoa từ bảng flowers

        // foreach ($flowers as $flower) {
        //     DB::table('flowers')
        //         ->where('id', $flower->id)
        //         ->update([
        //             'description' => $faker->sentence(),
        //         ]);
        // }
    }
}
