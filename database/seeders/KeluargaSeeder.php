<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            ['nama' => 'Slamet Asyono',
             'jenis_kelamin' => 'laki-laki',
             'hubungan' => 'ayah',
             'tanggal_lahir' => '1978-07-13'],
             ['nama' => 'Eka Sri Wahyuni',
             'jenis_kelamin' => 'perempuan',
             'hubungan' => 'ibu',
             'tanggal_lahir' => '1979-06-22'],
             ['nama' => 'Apip',
             'jenis_kelamin' => 'laki-laki',
             'hubungan' => 'anak',
             'tanggal_lahir' => '2002-04-15'],
             ['nama' => 'Acha',
             'jenis_kelamin' => 'perempuan',
             'hubungan' => 'anak',
             'tanggal_lahir' => '2008-06-24']
            ]);
    }
}
