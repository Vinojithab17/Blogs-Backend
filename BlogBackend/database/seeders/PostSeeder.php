<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('post')->insert([
            [
                'title' => 'First Blog Post',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in turpis sit amet lectus condimentum lobortis a et lectus.',
                'image' => 'https://example.com/image1.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Blog Post',
                'content' => 'Sed vehicula, eros eget lacinia ullamcorper, magna dui egestas ipsum, in interdum elit tortor id ante.',
                'image' => 'https://example.com/image2.jpg',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third Blog Post',
                'content' => 'Vestibulum condimentum lacus ut consectetur vestibulum. Nullam consequat ipsum vel justo fringilla, et varius leo auctor.',
                'image' => 'https://example.com/image3.jpg',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}