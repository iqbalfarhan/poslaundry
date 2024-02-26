<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Paket;
use Livewire\Attributes\On;
use Livewire\Component;

class AddItem extends Component
{
    public $show = false;
    public $paket_id;
    public $qty;

    #[On('addItem')]
    public function addItem(){
        $this->show = true;
    }

    public function simpan(){
        $valid = $this->validate([
            'paket_id' => 'required',
            'qty' => 'required|numeric'
        ]);

        $this->dispatch('doneItem', $valid);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.pages.transaksi.add-item', [
            'pakets' => Paket::pluck('name', 'id')
        ]);
    }
}
