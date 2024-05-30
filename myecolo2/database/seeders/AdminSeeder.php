<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = 'admin';
        $hashedPassword = Hash::make($password);

        Admin::create([
            'first_name' => 'admin',
            'last_name' => 'ensias',
            'email' => 'admin@um5.ac.ma',
            'password' => $hashedPassword,
        ]);
    }
}
