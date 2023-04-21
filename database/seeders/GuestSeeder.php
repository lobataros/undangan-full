<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guests')->insert([
            'id' => 'pw',
            'nama' => 'Ira',
            'hadir' => true,
            'tamu' => 'wanita',
            'hubungan' => 'pengantin',
        ]);
        DB::table('guests')->insert([
            'id' => 'pp',
            'nama' => 'Dimas',
            'hadir' => true,
            'tamu' => 'pria',
            'hubungan' => 'pengantin',
        ]);
    }
}
