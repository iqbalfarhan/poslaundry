<?php

namespace App\Livewire\Widget;

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
        return view('livewire.widget.pendapatan-bulanan');
    }
}
