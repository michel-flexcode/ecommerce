<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemple de données pour la catégorie
        $categoriesData = [
            ['name' => 'Catégorie 1', 'product_id' => 1],
            ['name' => 'Catégorie 2', 'product_id' => 2],
            ['name' => 'Catégorie 3', 'product_id' => 3],
            // Ajoutez d'autres catégories au besoin
        ];

        // Boucle sur les données et les insère dans la table 'categories'
        foreach ($categoriesData as $categoryData) {
            Categorie::create($categoryData);
        }
    }
}
