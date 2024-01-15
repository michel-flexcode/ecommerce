<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PanierDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // L'ordre est important, sans le dossier parent, il ne peut pas créer tout
        $this->call([
            CustomersSeeder::class,
        ]);
        $this->call([
            SellersSeeder::class,
        ]);
        $this->call([
            PanierSeeder::class,
        ]);
        $this->call([
            CategorieSeeder::class,
        ]);
        $this->call([
            ProductsSeeder::class,
        ]);

        $this->call([
            PanierDetailSeeder::class,
        ]);
    }
}
