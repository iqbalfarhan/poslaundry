<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'key' => 'nama',
                'type' => 'tulisan',
                'value' => 'POS Laundry',
            ],
            [
                'key' => 'alamat',
                'type' => 'tulisan panjang',
                'value' => 'Jl.Nama jalan RT.00 No.0000, Kota, Kota Barat, WA: 080000000000, E-mail:admin@poslaundry.com',
            ],
            [
                'key' => 'logo',
                'type' => 'gambar',
                'value' => null,
            ],
        ];

        foreach ($datas as $data) {
            Pengaturan::updateOrCreate([
                'key' => $data['key'],
                'type' => $data['type'],
            ],[
                'value' => $data['value'],
            ]);
        }
    }
}
