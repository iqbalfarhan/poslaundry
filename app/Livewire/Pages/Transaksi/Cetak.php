<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Transaksi;
use Livewire\Component;

class Cetak extends Component
{
    public Transaksi $transaksi;

    public function mount(Transaksi $transaksi){
        $this->transaksi = $transaksi;
    }

    public function render()
    {
        return view('livewire.pages.transaksi.cetak');
    }
}
