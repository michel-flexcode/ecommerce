<?php

namespace Database\Seeders;

use App\Models\PanierDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PanierDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemple de données pour les détails du panier
        $panierDetailsData = [
            ['panier_id' => 1, 'product_id' => 1],
            ['panier_id' => 1, 'product_id' => 2],
            ['panier_id' => 2, 'product_id' => 3],
            // Ajoutez d'autres détails du panier au besoin
        ];

        // Boucle sur les données et les insère dans la table 'panier_details'
        foreach ($panierDetailsData as $panierDetailData) {
            PanierDetail::create($panierDetailData);
        }
    }
}
