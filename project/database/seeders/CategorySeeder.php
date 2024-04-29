<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Category::factory()->count(5)->create();
        Category::create([
            'name'=>"Taycan",
            'image_url'=>"https://cdn.motor1.com/images/mgl/y2GlxY/s1/porsche-taycan-turbo-gt.webp"
        ]);
        Category::create([
            'name'=>"Panamera",
            'image_url'=>"https://autonews.autoua.net/media/cache/39/7b/397b5c2b0c6ea5e6d53e1ed69652bda6.jpg"
        ]);
        Category::create([
            'name'=>"Macan",
            'image_url'=>"https://hips.hearstapps.com/hmg-prod/images/2024-porsche-macan-s-102-6514924138123.jpg?crop=0.516xw:0.387xh;0.297xw,0.473xh&resize=1200:*"
        ]);




    }
}
