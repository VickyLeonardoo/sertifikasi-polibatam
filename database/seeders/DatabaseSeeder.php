<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Role;
use App\Models\Prodi;
use App\Models\Skema;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'nama' => 'Asesor'
        ]);

        Role::create([
            'nama' => 'Asesi'
        ]);

        Prodi::create([
            'kodeProdi' => 'IF',
            'namaProdi' => 'Teknik Informatika'
        ]);

        Prodi::create([
            'kodeProdi' => 'MM',
            'namaProdi' => 'Teknik Multimedia dan Jaringan'
        ]);

        Skema::create([
            'nama' => 'Junior Web Programming',
            'prodi_id' => '1'
        ]);

    }
}
