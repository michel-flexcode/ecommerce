<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemple de données pour les produits
        $productsData = [
            ['name' => 'Produit 1', 'categorie_id' => 1, 'price' => 10.99],
            ['name' => 'Produit 2', 'categorie_id' => 2, 'price' => 19.99],
            ['name' => 'Produit 3', 'categorie_id' => 3, 'price' => 29.99],
            // Ajoutez d'autres produits au besoin
        ];

        // Boucle sur les données et les insère dans la table 'products'
        foreach ($productsData as $productData) {
            Product::create($productData);
        }
    }
}
