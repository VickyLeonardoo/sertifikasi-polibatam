<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('elemens')->insert([
            [
                'unit_id' => '1',
                'name' => 'Menentukan kualifikasi program pelatihan'
            ],
            [
                'unit_id' => '1',
                'name' => 'Menentukan persyaratan peserta'
            ],
            [
                'unit_id' => '1',
                'name' => 'Menyusun kurikulum'
            ],
            [
                'unit_id' => '1',
                'name' => 'Menyusun silabus'
            ],
            [
                'unit_id' => '2',
                'name' => 'Mendesain dan memvalidasi suatu strategi untuk media pembelajaran'
            ],
            [
                'unit_id' => '2',
                'name' => 'Memilih media pembelajaran'
            ],
            [
                'unit_id' => '2',
                'name' => 'Mengembangkan media cetak, non-projectable and projectable'
            ],
            [
                'unit_id' => '3',
                'name' => 'Menerapkan bimbingan yang tepat dalam situasi pembelajaran'
            ],
            [
                'unit_id' => '3',
                'name' => 'Menjalin hubungan kerja yang baik pada situasi pembelajaran'
            ],
            [
                'unit_id' => '3',
                'name' => 'Memonitor proses pembelajaran dalam situasi pembelajaran'
            ],
            [
                'unit_id' => '4',
                'name' => 'Membuat daftar kebutuhan bahan pelatihan'
            ],
            [
                'unit_id' => '4',
                'name' => 'Menyiapkan bahan pelatihan'
            ],
            [
                'unit_id' => '4',
                'name' => 'Mendistribusikan penggunaan bahan dalam proses pelatihan'
            ],
            [
                'unit_id' => '4',
                'name' => 'Membuat laporan penggunaan bahan latihan'
            ],
            [
                'unit_id' => '5',
                'name' => 'Membuat daftar kebutuhan media pelatihan
                '
            ],
            [
                'unit_id' => '5',
                'name' => 'Menyiapkan media pelatihan'
            ],
            [
                'unit_id' => '5',
                'name' => 'Penggunaan media untuk pelatihan'
            ],
            [
                'unit_id' => '5',
                'name' => 'Memelihara media pelatihan'
            ],
            [
                'unit_id' => '6',
                'name' => 'Mengidentifikasi karakteristik teknis dan potensi Teknologi
                Informasi dan Komunikasi (TIK) yang dapat diterapkan dalam
                situasi pelatihan
                '
            ],
            [
                'unit_id' => '6',
                'name' => 'Memilih TIK yang cocok untuk program pelatihan tatap muka,
                jarak jauh atau kombinasi keduanya'
            ],
            [
                'unit_id' => '6',
                'name' => 'Mendisain, mengelola pengembangan dan memvalidasi TIK
                berbasis sumber daya pembelajaran untuk program
                pembelajaran tatap muka, jarak jauh dan kombinasi
                keduanya'
            ],

        ]);
    }
}
