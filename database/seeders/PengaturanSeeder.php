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
                'key' => 'nama toko',
                'type' => 'text',
                'value' => 'Iqbal loundry',
            ],
            [
                'key' => 'versi',
                'type' => 'number',
                'value' => 1,
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
