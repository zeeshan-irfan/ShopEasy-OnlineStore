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
       for ($i=0; $i <15 ; $i++) { 
            Product::create([
                'title'=>fake()->text(20),
                'description'=>fake()->text(100),
                'rating'=>fake()->numberBetween(0,5),
                'price'=>fake()->numberBetween(10,200),
                'quantity'=>fake()->numberBetween(10,500),
                'images'=>json_encode(['storage/images/keyboard.png',
                            'storage/images/glasses.png',
                            'storage/images/bag.png',
                            'storage/images/mouse.png',
                            'storage/images/men.png',
                            'storage/images/women.png',
                            ]),
                'category_id'=>fake()->numberBetween(1,4),
                'brand_id'=>fake()->numberBetween(1,5),
                'seller_id'=>1
            ]);
       }
    }
}
