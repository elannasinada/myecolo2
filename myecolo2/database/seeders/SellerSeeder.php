<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a few sellers
        $sellers = [
            [
                'name' => 'Mohammed',
                'username' => 'hanout',
                'email' => 'hanout@gmail.com',
                'email_verified_at' => now(),
                'verified' => 1,
                'password' => Hash::make('seller'),
                'autorisation' => NULL,
                'picture' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'city' => NULL,
                'status' => 'Pending',
                'payment_method' => NULL,
                'payment_email' => NULL,
            ],
            [
                'name' => 'Abdelhakim',
                'username' => 'bakery_abdelhakim',
                'email' => 'abdelhakim@example.com',
                'email_verified_at' => now(),
                'verified' => 1,
                'password' => Hash::make('seller'),
                'autorisation' => NULL,
                'picture' => NULL,
                'address' => 'Avenue Hassan II, Quartier des Oliviers',
                'phone' => '+212 6 12 34 56 78',
                'city' => 'Casablanca',
                'status' => 'Pending',
                'payment_method' => NULL,
                'payment_email' => NULL,
            ],
            [
                'name' => 'Fatima Zahra',
                'username' => 'grocery_fatima',
                'email' => 'fatima@example.com',
                'email_verified_at' => now(),
                'verified' => 1,
                'password' => Hash::make('seller'),
                'autorisation' => NULL,
                'picture' => NULL,
                'address' => 'Rue Mohammed V, Quartier des Marchands',
                'phone' => '+212 6 98 76 54 32',
                'city' => 'Rabat',
                'status' => 'Active',
                'payment_method' => NULL,
                'payment_email' => NULL,
            ],
            [
                'name' => 'Youssef',
                'username' => 'butcher_youssef',
                'email' => 'youssef@example.com',
                'email_verified_at' => now(),
                'verified' => 1,
                'password' => Hash::make('seller'),
                'autorisation' => NULL,
                'picture' => NULL,
                'address' => 'Avenue Mohammed VI, Quartier des Bouchers',
                'phone' => '+212 6 55 44 33 22',
                'city' => 'Marrakech',
                'status' => 'Pending',
                'payment_method' => NULL,
                'payment_email' => NULL,
            ],
            [
                'name' => 'Sanaa',
                'username' => 'fruit_sanaa',
                'email' => 'sanaa@example.com',
                'email_verified_at' => now(),
                'verified' => 1,
                'password' => Hash::make('seller'),
                'autorisation' => NULL,
                'picture' => NULL,
                'address' => 'Rue Abou Bakr Essedik, Quartier des Fruits',
                'phone' => '+212 6 66 77 88 99',
                'city' => 'Agadir',
                'status' => 'Pending',
                'payment_method' => NULL,
                'payment_email' => NULL,
            ],
        ];

        foreach ($sellers as $seller) {
            Seller::create($seller);
        }
    }
}
