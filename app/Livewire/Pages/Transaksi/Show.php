<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Transaksi;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{
    public $show = false;
    public ?Transaksi $transaksi;

    #[On('detailTransaksi')]
    public function detailTransaksi(Transaksi $transaksi){
        $this->show = true;
        $this->transaksi = $transaksi;
    }

    public function render()
    {
        return view('livewire.pages.transaksi.show');
    }
}
