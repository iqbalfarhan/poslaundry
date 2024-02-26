<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class StatusLaundry extends Component
{
    public $datasets = [
        [
            'bulan' => 'Daftar',
            'value' => 23746,
        ],
        [
            'bulan' => 'Proses',
            'value' => 43746,
        ],
        [
            'bulan' => 'Selesai',
            'value' => 53746,
        ],
    ];

    public function render()
    {
        return view('livewire.widget.status-laundry');
    }
}
