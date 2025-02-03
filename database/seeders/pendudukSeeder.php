<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\penduduk;

class pendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        penduduk::updateOrCreate(
            ['key' => 'jumlah_penduduk'],
            ['value' => '320']
        );    
    }
}
