<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'username' => 'bantantoea(uname)',
            'name' => 'Admin Bantan Tua',
            'password' => Hash::make('11111111'),
            'remember_token' => null,  // Jika Anda ingin token "remember me", biarkan null atau isi dengan token
            'role' => 'admin',
        ]);
    }
}
