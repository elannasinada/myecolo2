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
                'name' => 'Jaafar',
                'username' => 'supermarket jaafar',
                'email' => 'jaafar@gmail.com',
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
        ];

        foreach ($sellers as $seller) {
            Seller::create($seller);
        }
    }
}
