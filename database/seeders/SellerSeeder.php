<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seller = Seller::create([
            'name'=>'Zeeshan',
            'email'=>'zeeshan@gmail.com',
            'password'=>'12345'
        ]);
    }
}
