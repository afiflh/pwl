<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     ArticleSeeder::class
        // ]);
        // // $this->call([
        // //     HobiSeeder::class
        // // ]);
        // $this->call([
        //     HobiLagiSeeder::class
        // ]);
        // $this->call([
        //     KeluargaSeeder::class
        // ]);
        // $this->call([
        //     MataKuliahSeeder::class
        // ]);
        $this->call([
            UserSeeder::class,
            KeluargaSeeder::class,
            MataKuliahSeeder::class,
            
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
