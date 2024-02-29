<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Date extends Component
{
    public function render()
    {
        list($tahun, $bulan, $tanggal) = explode(' ', date('Y F d'));
        return view('livewire.widget.date', [
            'tahun' => $tahun,
            'bulan' => $bulan,
            'tanggal' => $tanggal,
        ]);
    }
}
