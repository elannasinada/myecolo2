<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a few clients
        $clients = [
            [
                'name' => 'nada',
                'username' => 'nada03',
                'email' => 'nada@um5.ac.ma',
                'email_verified_at' => now(),
                'verified' => 1,
                'password' => Hash::make('client'),
                'picture' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'city' => NULL,
            ],
            [
                'name' => 'wiame',
                'username' => 'wiame03',
                'email' => 'wiame@um5.ac.ma',
                'email_verified_at' => now(),
                'verified' => 1,
                'password' => Hash::make('client'),
                'picture' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'city' => NULL,
            ],
            [
                'name' => 'Yasmine',
                'username' => 'yasmine01',
                'email' => 'yasmine@gmail.com',
                'email_verified_at' => now(),
                'verified' => 1,
                'password' => Hash::make('client'),
                'picture' => NULL,
                'address' => 'Rue Mohammed V, Quartier des Hôpitaux',
                'phone' => '+212 6 12 34 56 78',
                'city' => 'Casablanca',
            ],
            [
                'name' => 'Karim',
                'username' => 'karim02',
                'email' => 'karim@outlook.com',
                'email_verified_at' => now(),
                'verified' => 1,
                'password' => Hash::make('client'),
                'picture' => NULL,
                'address' => 'Avenue Hassan II, Hay Riad',
                'phone' => '+212 6 98 76 54 32',
                'city' => 'Rabat',
            ],
            [
                'name' => 'Fatima',
                'username' => 'fatima03',
                'email' => 'fatima@gmail.com',
                'email_verified_at' => now(),
                'verified' => 1,
                'password' => Hash::make('client'),
                'picture' => NULL,
                'address' => 'Rue Abou Bakr Essedik, Quartier Oasis',
                'phone' => '+212 6 55 44 33 22',
                'city' => 'Marrakech',
            ],
            [
                'name' => 'Mehdi',
                'username' => 'mehdi04',
                'email' => 'mehdi@outlook.com',
                'email_verified_at' => now(),
                'verified' => 1,
                'password' => Hash::make('client'),
                'picture' => NULL,
                'address' => 'Avenue Mohammed VI, Quartier Administratif',
                'phone' => '+212 6 66 77 88 99',
                'city' => 'Agadir',
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
