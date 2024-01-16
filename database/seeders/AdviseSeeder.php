<?php

namespace Database\Seeders;

use App\Models\Advise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdviseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemple de création de plusieurs avis fictifs
        $advises = [
            [
                'product_id' => 1,
                'customer_id' => 1,
                'content' => 'Ceci est un avis sur le produit 1.',
            ],
            [
                'product_id' => 2,
                'customer_id' => 2,
                'content' => 'Ceci est un avis sur le produit 2.',
            ],
            [
                'product_id' => 1,
                'customer_id' => 3,
                'content' => 'Ceci est un autre avis sur le produit 1.',
            ],
            // Ajoute d'autres avis selon tes besoins
        ];

        foreach ($advises as $advise) {
            Advise::create($advise);
        }
    }
}
