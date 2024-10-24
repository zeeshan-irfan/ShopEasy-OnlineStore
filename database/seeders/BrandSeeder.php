<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = ['No Brand','addidas', 'rolex','xiaomi','apple'];
        foreach ($brands as  $brand) {
            
            DB::table('brands')->insert([
                'name'=>$brand,
            ]);
        }
    }
}
