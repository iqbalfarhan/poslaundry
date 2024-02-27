<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Transaksi;
use Livewire\Component;

class Card extends Component
{
    public Transaksi $transaksi;

    public function mount(Transaksi $data){
        $this->transaksi = $data;
    }

    public function render()
    {
        return view('livewire.pages.transaksi.card', [
            'color' => $this->transaksi->color
        ]);
    }
}
