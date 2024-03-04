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
                'value' => 'POS Loundry',
            ],
            [
                'key' => 'alamat',
                'type' => 'tulisan panjang',
                'value' => 'Alamat: Jl.Rahayu jaya RT.30 No.123S, Balikpapan, Balikpapan barat, Wa : 0812345678890',
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
