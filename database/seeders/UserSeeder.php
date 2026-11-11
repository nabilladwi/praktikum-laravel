<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    // Akun uji khusus lingkungan lokal praktikum
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'petugas@example.test'],
            ['name' => 'Petugas SIM-Surat', 'password' => Hash::make('PraktikumP5!2026'), 'role' => 'petugas']
        );

        User::updateOrCreate(
            ['email' => 'pembaca@example.test'],
            ['name' => 'Pembaca SIM-Surat', 'password' => Hash::make('PraktikumP5!2026'), 'role' => 'pembaca']
        );
    }
}
