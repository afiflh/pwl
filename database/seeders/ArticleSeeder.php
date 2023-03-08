<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['judul' => '5 Cara Memulai Bisnis Online dengan Mudah',
             'penulis' => 'Maya Sari',
             'tanggal_terbit' => '2022-03-01'],
            ['judul' => 'Cara Menulis Cerpen yang Menarik',
              'penulis' => 'Denny Kusuma',
              'tanggal_terbit' => '2022-04-05'],
            ['judul' => '10 Tips Agar Dapat Tidur Nyenyak',
              'penulis' => 'Ahmad Rizal',
              'tanggal_terbit' => '2022-05-12'],
            ['judul' => 'Panduan Lengkap Belajar Bahasa Korea',
              'penulis' => 'Sarah Kim',
              'tanggal_terbit' => '2022-06-20'],
            ['judul' => 'Serba-Serbi Kehidupan di Luar Angkasa',
              'penulis' => 'Mira Asmara',
              'tanggal_terbit' => '2022-08-07'],
            ['judul' => '7 Cara Menghemat Listrik di Rumah',
              'penulis' => 'Budi Santoso',
              'tanggal_terbit' => '2022-09-15'],
            ['judul' => 'Inovasi Baru dalam Bidang Teknologi',
              'penulis' => 'Andi Wijaya',
              'tanggal_terbit' => '2022-11-03'],
            ['judul' => 'Tips Menjaga Kesehatan Mental di Era Digital',
              'penulis' => 'Rina Dewi',
              'tanggal_terbit' => '2022-12-08']
            ]);
    }
}
