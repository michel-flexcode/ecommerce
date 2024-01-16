<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sellersData = [
            ['user_id' => 4],
            ['user_id' => 5],
            ['user_id' => 6],

        ];

        foreach ($sellersData as $sellersData) {
            Seller::create($sellersData);
        }
    }
}
