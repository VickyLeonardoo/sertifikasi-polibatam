<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->insert([
            [
                'nama' => 'Menyusun Program Pelatihan'
            ],
            [
                'nama' => 'Mendesain Media Pembelajaran'
            ],
            [
                'nama' => 'Melaksanakan Pelatihan Tatap Muka'
            ],
            [
                'nama' => 'Mengelola Bahan Pelatihan'
            ],
            [
                'nama' => 'Mengelola Media Pelatihan'
            ],
            [
                'nama' => 'Mendesain Pembelajaran yang Inovatif untuk Suatu Program Pelatihan'
            ]
            // Tambahkan data lainnya sesuai kebutuhan Anda
        ]);
    }
}
