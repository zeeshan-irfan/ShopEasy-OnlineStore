<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Men', 'Women','Kids','Household'];
        foreach ($categories as  $value) {
            
            DB::table('categories')->insert([
                'name'=>$value
            ]);
        }
       
    }
}
