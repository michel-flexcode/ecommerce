<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemple de données pour les clients
        $customersData = [
            ['user_id' => 1],
            ['user_id' => 2],
            ['user_id' => 3],
            // Ajoutez d'autres clients au besoin
        ];

        // Boucle sur les données et les insère dans la table 'customers'
        foreach ($customersData as $customerData) {
            Customer::create($customerData);
        }
    }
}
