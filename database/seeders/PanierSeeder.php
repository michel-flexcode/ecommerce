<?php

namespace Database\Seeders;

use App\Models\Panier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PanierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemple de données pour les paniers
        $paniersData = [
            ['customer_id' => 1],
            ['customer_id' => 2],
            ['customer_id' => 3],
            // Ajoutez d'autres paniers au besoin
        ];

        // Boucle sur les données et les insère dans la table 'paniers'
        foreach ($paniersData as $panierData) {
            Panier::create($panierData);
        }
    }
}
