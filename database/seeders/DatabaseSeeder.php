<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Iqbal Farhan Syuhada',
            'email' => 'iqbalfarhan1996@gmail.com',
            'password' => 'adminoke'
        ]);

        $this->call([
            // CustomerSeeder::class,
            // PaketSeeder::class,
            // TransaksiSeeder::class,
            PengaturanSeeder::class,
        ]);

    }
}
