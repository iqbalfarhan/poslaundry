<?php

namespace App\Livewire\Pages\Transaksi;

use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{
    public $show = false;

    #[On('detailTransaksi')]
    public function detailTransaksi(){
        $this->show = true;
    }

    public function render()
    {
        return view('livewire.pages.transaksi.show');
    }
}
