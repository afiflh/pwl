<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('mata_kuliahs')->insert([
        ['nama_matkul' => 'Kewarganegaraan',
         'nama_dosen' => 'Widaningsih, S.H., M.H.',
         'jumlah_sks' => '2'],
         ['nama_matkul' => 'Pemograman Web Lanjut',
         'nama_dosen' => 'Moch. Zawaruddin Abdullah, S.ST., M.Kom.',
         'jumlah_sks' => '3'],
         ['nama_matkul' => 'Analisis dan Desain Berorentasi Objek',
         'nama_dosen' => 'Ariadi Retno Tri Hayati Ririd, S.Kom., M.Kom.',
         'jumlah_sks' => '2'],
         ['nama_matkul' => 'Proyek 1',
         'nama_dosen' => 'Rudy Ariyanto, S.T., M.Cs.',
         'jumlah_sks' => '3'],
         ['nama_matkul' => 'Manajemen Proyek',
         'nama_dosen' => 'Candra Bella Vista, S.Kom., M.T.',
         'jumlah_sks' => '2'],
         ['nama_matkul' => 'Business Intelligence',
         'nama_dosen' => 'Endah Septa Sintiya, S.Pd., M.Kom.',
         'jumlah_sks' => '2'],
         ['nama_matkul' => 'Jaringan Komputer',
         'nama_dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
         'jumlah_sks' => '2'],
         ['nama_matkul' => 'Praktikum Jaringan Komputer',
         'nama_dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
         'jumlah_sks' => '2'],
         ['nama_matkul' => 'Komputasi Statistika',
         'nama_dosen' => 'Elok Nur Hamdana, S.T, M.T.',
         'jumlah_sks' => '2']
    ]);
    }
}
