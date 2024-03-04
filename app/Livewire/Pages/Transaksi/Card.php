<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Transaksi;
use Livewire\Component;

class Card extends Component
{
    public Transaksi $transaksi;
    protected $listeners = ['reload' => '$refresh'];
    public $color;

    public function mount(Transaksi $data, $color){
        $this->transaksi = $data;
        $this->color = $color ?? $this->transaksi->color;
    }

    public function render()
    {
        return view('livewire.pages.transaksi.card');
    }
}
