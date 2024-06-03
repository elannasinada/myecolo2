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
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
