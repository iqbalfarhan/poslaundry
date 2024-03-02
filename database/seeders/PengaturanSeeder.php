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
                'value' => 'ini alamat toko laundrynya RT.00 No.00A Kota Laundry',
            ],
            [
                'key' => 'versi',
                'type' => 'tulisan',
                'value' => "v1.0",
            ],
        ];

        foreach ($datas as $data) {
            Pengaturan::updateOrCreate([
                'key' => $data['key'],
                'type' => $data['type'],
                'value' => $data['value'],
            ]);
        }
    }
}
