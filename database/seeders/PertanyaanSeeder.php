<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pertanyaans')->insert([
            [
                'elemen_id' => '1',
                'nomor'=> '1.1',
                'nama' => 'Apakah Anda dapat menentukan Nama program pelatihan berdasarkan pemaketan/pengemasan kompetensi?'
            ],
            [
                'elemen_id' => '1',
                'nomor'=> '1.2',
                'nama' => 'Apakah Anda dapat menentukan jenjang program pelatihan berdasarkan jenjang kualifikasi?'
            ],
            [
                'elemen_id' => '1',
                'nomor'=> '1.3',
                'nama' => 'Apakah Anda dapat merumuskan deskripsi program pelatihan mengacu kepada isi program pelatihan?'
            ],
            [
                'elemen_id' => '1',
                'nomor'=> '1.4',
                'nama' => 'Apakah Anda dapat menetapkan Kompetensi lulusan berdasarkan nama dan jenjang program. ?'
            ],
            [
                'elemen_id' => '2',
                'nomor'=> '2.1',
                'nama' => 'Apakah Anda dapat menentukan kebutuhan program pelatihan? '
            ],
            [
                'elemen_id' => '2',
                'nomor'=> '2.2',
                'nama' => 'Apakah Anda dapat menentukan persyaratan kompetensi yang mengacu pada prasyarat untuk mengikuti program pelatihan.'
            ],
            [
                'elemen_id' => '3',
                'nomor'=> '3.1',
                'nama' => 'Apakah Anda dapat menentukan unit-unit kompetensi yang mengacu pada pencapaian kompetensi lulusan program pelatihan?'
            ],
            [
                'elemen_id' => '3',
                'nomor'=> '3.2',
                'nama' => 'Apakah anda dapat mengelompokkan materi pelatihan ke dalam kelompok umum dan inti?'
            ],
            [
                'elemen_id' => '3',
                'nomor'=> '3.3',
                'nama' => 'Apakah Anda dapat menentukan kebutuhan yang sesuai dengan kompetensi lulusan?'
            ],
            [
                'elemen_id' => '4',
                'nomor'=> '4.1',
                'nama' => 'Apakah Anda dapat mengidentifikasi elemen unit kompetensi sesuai unit kompetensi?'
            ],
            [
                'elemen_id' => '4',
                'nomor'=> '4.2',
                'nama' => 'Apakah Anda dapat mengidentifikasi kriteria unjuk kerja sesuai elemen kompetensi?'
            ],
            [
                'elemen_id' => '4',
                'nomor'=> '4.3',
                'nama' => 'Apakah Anda dapat mendeskripsikan Indikator unjuk kerja untuk mencapai kriteria unjuk kerja?'
            ],
            [
                'elemen_id' => '4',
                'nomor'=> '4.4',
                'nama' => 'Apakah Anda dapat memahami pengetahuan, keterampilan, sikap kerja dan jangka waktu (teori dan praktek) ditentukan?'
            ],
            [
                'elemen_id' => '5',
                'nomor'=> '1.1',
                'nama' => 'Apakah Anda dapat menganalisis desain program pelatihan?
                '
            ],
            [
                'elemen_id' => '5',
                'nomor'=> '1.2',
                'nama' => 'Apakah Anda dapat merumuskan strategi media pembelajaran?
                '
            ],
            [
                'elemen_id' => '5',
                'nomor'=> '1.3',
                'nama' => 'Apakah Anda dapat memvalidasi strategi pengembangan media pembelajaran dengan mereka yang terlibat dalam proses pelatihan?
                '
            ],
            [
                'elemen_id' => '6',
                'nomor'=> '2.1',
                'nama' => 'Apakah Anda dapat menginventariskan materi pembelajaran? '
            ],
            [
                'elemen_id' => '6',
                'nomor'=> '2.2',
                'nama' => 'Apakah Anda dapat memilih metode pembelajaran yang sesuai dengan materi pembelajaran? '
            ],
            [
                'elemen_id' => '6',
                'nomor'=> '2.3',
                'nama' => 'Apakah Anda dapat memilih media pembelajaran yang sesuai dengan pembelajaran?'
            ],
            [
                'elemen_id' => '7',
                'nomor'=> '3.1',
                'nama' => 'Apakah Anda dapat mendesain media berdasarkan pada strategi dan rencana umum untuk pengembangan media?
                '
            ],
            [
                'elemen_id' => '7',
                'nomor'=> '3.2',
                'nama' => 'Apakah Anda dapat mengembangkan hasil desain media pembelajaran?'
            ],
            [
                'elemen_id' => '8',
                'nomor'=> '1.1',
                'nama' => 'Apakah Anda dapat mewujudkan Hubungan kerja yang baik antar peserta pelatihan dalam proses pembelajaran dalam bentuk saling memahami peran masing-masing?'
            ],
            [
                'elemen_id' => '8',
                'nomor'=> '1.2',
                'nama' => 'Apakah Anda dapat mewujudkan Hubungan kerja yang baik antara peserta pelatihan dengan instruktur masing-masing dalam bentuk saling memahami peran masing-masing? '
            ],
            [
                'elemen_id' => '8',
                'nomor'=> '1.3',
                'nama' => 'Apakah Anda dapat mewujudkan Hubungan yang harmonis antara peserta pelatihan dan instruktur dengan situasi lingkungan pembelajaran dalam bentuk saling memahami peran masing-masing? '
            ],
            [
                'elemen_id' => '9',
                'nomor'=> '2.1',
                'nama' => 'Apakah Anda dapat mengidentifikasi Materi bimbingan sesuai dengan situasi pembelajaran? '
            ],
            [
                'elemen_id' => '9',
                'nomor'=> '2.2',
                'nama' => 'Apakah Anda dapat melaksanakan Proses pembelajaran dengan lancar, tertib sesuai dengan rencana'
            ],
            [
                'elemen_id' => '9',
                'nomor'=> '2.3',
                'nama' => 'Apakah Anda dapat melaksanakan Proses pembelajaran secara individu, kelompok kecil  dan kelompok besar'
            ],
            [
                'elemen_id' => '10',
                'nomor'=> '3.1',
                'nama' => 'Apakah Anda dapat mengidentifikasi Proses pembelajaran sesuai dengan situasi pembelajaran? '
            ],
            [
                'elemen_id' => '10',
                'nomor'=> '3.2',
                'nama' => 'Apakah Anda dapat membimbing Proses fasilitasi pembelajaran dimonitor?'
            ],
            [
                'elemen_id' => '10',
                'nomor'=> '3.3',
                'nama' => 'Apakah dapat melaporkan proses fasilitasi bimbingan pembelajaran?
                '
            ],
            [
                'elemen_id' => '11',
                'nomor'=> '1.1',
                'nama' => 'Apakah Anda dapat mengidentifikasi bahan pelatihan teori dan praktik sesuai dengan materi latihan?
                '
            ],
            [
                'elemen_id' => '11',
                'nomor'=> '1.2',
                'nama' => 'Apakah Anda dapat membuat daftar kebutuhan bahan pelatihan sesuai dengan materi latihan?
                '
            ],
            [
                'elemen_id' => '11',
                'nomor'=> '1.3',
                'nama' => 'Apakah Anda dapat mengajukan kebutuhan bahan pelatihan sesuai dengan prosedur yang berlaku?
                '
            ],
            [
                'elemen_id' => '12',
                'nomor'=> '2.1',
                'nama' => 'Apakah Anda dapat memverifikasi bahan pelatihan sesuai kebutuhan pelatihan?'
            ],
            [
                'elemen_id' => '12',
                'nomor'=> '2.2',
                'nama' => 'Apakah Anda dapat mempersiapkan bahan pelatihan teori dan praktik sesuai kebutuhan pelatihan?'
            ],
            [
                'elemen_id' => '13',
                'nomor'=> '3.1',
                'nama' => 'Apakah Anda dapat memverifikasi kebutuhan bahan pelatihan sesuai dengan kemajuan peserta pelatihan?'
            ],
            [
                'elemen_id' => '13',
                'nomor'=> '3.2',
                'nama' => 'Apakah Anda dapat mendistribusikan Kebutuhan bahan pelatihan sesuai dengan kemajuan peserta pelatihan?'
            ],
            [
                'elemen_id' => '14',
                'nomor'=> '4.1',
                'nama' => 'Apakah Anda dapat mendokumentasikan data pemakaian bahan pelatihan sesuai prosedur?'
            ],
            [
                'elemen_id' => '14',
                'nomor'=> '4.2',
                'nama' => 'Apakah Anda dapat membuat laporan penggunaan bahan pelatihan sesuai dengan prosedur?'
            ],
            [
                'elemen_id' => '14',
                'nomor'=> '4.3',
                'nama' => 'Apakah Anda dapat menyampaikan laporan penggunaan bahan pelatihan kepada manajemen sesuai prosedur?'
            ],
            [
                'elemen_id' => '15',
                'nomor'=> '1.1',
                'nama' => 'Apakah anda dapat mengidentifikasi Kebutuhan media pelatihan sesuai dengan materi latihan?'
            ],
            [
                'elemen_id' => '15',
                'nomor'=> '1.2',
                'nama' => 'Apakah Anda dapat membuat Daftar kebutuhan media pelatihan sesuai dengan materi latihan?'
            ],
            [
                'elemen_id' => '15',
                'nomor'=> '1.3',
                'nama' => 'Apakah Anda dapat mengajukan Kebutuhan media pelatihan sesuai dengan materi latihan?'
            ],
            [
                'elemen_id' => '16',
                'nomor'=> '2.1',
                'nama' => 'Apakah Anda dapat memverivikasi Media pelatihan sesuai kebutuhan materi latihan?'
            ],
            [
                'elemen_id' => '16',
                'nomor'=> '2.2',
                'nama' => 'Apakah anda dapat menyiapkan Media pelatihan sesuai dengan kebutuhan materi latihan?'
            ],
            [
                'elemen_id' => '17',
                'nomor'=> '3.1',
                'nama' => 'Apakah anda dapat memilih Kebutuhan media pelatihan sesuai dengan materi pelatihan?'
            ],
            [
                'elemen_id' => '17',
                'nomor'=> '3.2',
                'nama' => 'Apakah anda dapat mendistribusikan Media pelatihan sesuai dengan kemajuan materi pelatihan?'
            ],
            [
                'elemen_id' => '18',
                'nomor'=> '4.1',
                'nama' => 'Apakah anda dapat mengidentifikasi kebutuhan perawatan dan perbaikan media pelatihan sesuai prosedur?'
            ],
            [
                'elemen_id' => '18',
                'nomor'=> '4.2',
                'nama' => 'Apakah anda dapat menyimpan Pengalokasian media pelatihan sesuaistandard operating procedure (SOP)?'
            ],
            [
                'elemen_id' => '18',
                'nomor'=> '4.3',
                'nama' => 'Apakah Anda dapat merawat media pelatihan sesuai standard operating procedure (SOP)?'
            ],
            [
                'elemen_id' => '18',
                'nomor'=> '4.4',
                'nama' => 'Apakah Anda dapat melaporkan media pelatihan yang memerlukan perbaikan sesuai prosedur?'
            ],
            [
                'elemen_id' => '18',
                'nomor'=> '1.1',
                'nama' => 'Apakah Anda dapat mendesain karakteristik dan teknis peralatan berteknologi?'
            ],
            [
                'elemen_id' => '19',
                'nomor'=> '1.2',
                'nama' => 'Apakah Anda dapat mengidentifikasi kegunaan peralatan berteknologi dalam pelatihan?'
            ],
            [
                'elemen_id' => '19',
                'nomor'=> '1.3',
                'nama' => 'Apakah Anda dapat mengasosiasikan Karakteristik kompetensi berbasis komputer dengan teknologi inovatif?'
            ],
            [
                'elemen_id' => '20',
                'nomor'=> '2.1',
                'nama' => 'Apakah Anda dapat mengevaluasi kesesuaian pedagogi peralatan berteknologi dievaluasi?'
            ],
            [
                'elemen_id' => '20',
                'nomor'=> '2.2',
                'nama' => 'Apakah Anda dapat menentukan ketersediaan peralatan berteknologi untuk mengembangkan program pelatihan? '
            ],
            [
                'elemen_id' => '20',
                'nomor'=> '2.3',
                'nama' => 'Apakah Anda dapat menkombinasikan Peralatan teknologi untuk program pelatihan?'
            ],
            [
                'elemen_id' => '21',
                'nomor'=> '3.1',
                'nama' => 'Apakah Anda dapat mendesain Sumber daya  pembelajaran inovatif?
                '
            ],
            [
                'elemen_id' => '21',
                'nomor'=> '3.2',
                'nama' => 'Apakah Anda dapat mengembangkan sumber daya pembelajaran yang inovatif?
                '
            ],
            [
                'elemen_id' => '21',
                'nomor'=> '3.3',
                'nama' => 'Apakah Anda dapat memvalidsai sumber daya pembelajaran?'
            ],


        ]);
    }
}
