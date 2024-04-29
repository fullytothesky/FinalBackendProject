<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>"Panamera 2024",
            'max_speed'=>290,
            'price'=>"150.000 $",
            'category_id'=>2,
             'image_url'=>"https://www.ixbt.com/img/n1/news/2023/10/5/2024-porsche-panamera-turbo-sonderwunsch_large.jpg"
        ]);
        Product::create([
            'name'=>"Panamera ",
            'max_speed'=>270,
            'price'=>"170.000 $",
            'category_id'=>2,
             'image_url'=>"https://winner.ua/source/2017/08/01-07-2016_main.jpg"
        ]);
        Product::create([
            'name'=>"Panamera GTS",
            'max_speed'=>300,
            'price'=>"190.000 $",
            'category_id'=>2,
             'image_url'=>"https://pictures.porsche.com/rtt/iris?COSY-EU-100-1711coMvsi60AAt5FwcmBEgA4qP8iBUDxPE3Cb9pNXoBuNIdMGF4tl3U0%25z8rMH8spbWvanYb%255y%25oq%25vSTmjMXD4qAZeoNBPUSfUx4RmWBisGK7Zlp0KtYYF%25mVSW8uAVbsqYSs6M0iO5Ml2CvNzxKEYGXVD2UxLODmLRXr5Mq24wq5Z6WyosUv1z9"
        ]);



        Product::create([
            'name'=>"Macan GTS",
            'max_speed'=>272,
            'price'=>"190.000 $",
            'category_id'=>3,
            'image_url'=> "https://www.motortrend.com/uploads/2022/10/2022-Porsche-Macan-GTS-38.jpg"
        ]);Product::create([
        'name'=>"Macan S",
        'max_speed'=>259,
        'price'=>"155.000 $",
        'category_id'=>3,
        'image_url'=>"https://cdn.motor1.com/images/mgl/Q0QyB/s3/2021-porsche-macan-ev-rendering.jpg"
    ]);
        Product::create([
        'name'=>"Macan",
        'max_speed'=>300,
        'price'=>"150.000 $",
        'category_id'=>3,
            'image_url'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTe8h_CLHJsMbjzyjwvLCPQqQDzAcxjHt9LuA&s"
    ]);
    }
}
