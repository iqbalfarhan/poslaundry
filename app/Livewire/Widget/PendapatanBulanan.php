<?php

namespace App\Livewire\Widget;

use App\Models\Transaksi;
use Livewire\Component;

class PendapatanBulanan extends Component
{
    public $datasets = [
        [
            'bulan' => 'Januari',
            'value' => 12345,
        ],
        [
            'bulan' => 'Februari',
            'value' => 65432,
        ],
        [
            'bulan' => 'Maret',
            'value' => 44567,
        ],
        [
            'bulan' => 'April',
            'value' => 87654,
        ],
        [
            'bulan' => 'Mei',
            'value' => 56789,
        ],
        [
            'bulan' => 'Juni',
            'value' => 67890,
        ],
    ];

    public function render()
    {
        list($tahunini, $bulanini) = explode('-', date('Y-m'));
        $bulanini = Transaksi::whereMonth('tanggal_order', $bulanini)->whereYear('tanggal_order', $tahunini)->sum('total');

        list($tahunlalu, $bulanlalu) = explode('-', date('Y-m', strtotime('-1 months')));
        $bulanlalu = Transaksi::whereMonth('tanggal_order', $bulanlalu)->whereYear('tanggal_order', $tahunlalu)->sum('total');

        return view('livewire.widget.pendapatan-bulanan', [
            'bulanini' => $bulanini,
            'bulanlalu' => $bulanlalu,
        ]);
    }
}
