<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiLagiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            ['nama_Hobi' => 'Hiking',
             'kategori_Hobi' => 'Outdoor',
             'durasi_hobi' => 'panjang'],
             ['nama_hobi' => 'Urban Sketching',
             'kategori_hobi' => 'Seni Visual',
             'durasi_hobi' => 'pendek'],
             ['nama_hobi' => 'Parkour',
             'kategori_hobi' => 'Olahraga',
             'durasi_hobi' => 'pendek'],
             ['nama_hobi' => 'Salsa Dancing',
             'kategori_hobi' => 'Tari',
             'durasi_hobi' => 'pendek'],
             ['nama_hobi' => 'Rock Climbing',
             'kategori_hobi' => 'Olahraga/Outdoor',
             'durasi_hobi' => 'pendek'],
             ['nama_hobi' => 'Camping',
             'kategori_hobi' => 'Outdoor',
             'durasi_hobi' => 'panjang'],
             ['nama_hobi' => 'Baking Bread',
             'kategori_hobi' => 'Memasak',
             'durasi_hobi' => 'pendek'],
             ['nama_hobi' => 'Stargazing',
             'kategori_hobi' => 'Astronomi',
             'durasi_hobi' => 'pendek'],
             ['nama_hobi' => 'Kaligrafi',
             'kategori_hobi' => 'Seni Visual',
             'durasi_hobi' => 'pendek'],
             ['nama_hobi' => 'Yoga',
             'kategori_hobi' => 'Olahraga',
             'durasi_hobi' => 'panjang']
            ]);
    }
}
