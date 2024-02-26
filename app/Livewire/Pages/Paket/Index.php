<?php

namespace App\Livewire\Pages\Paket;

use App\Models\Paket;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Data paket')]
class Index extends Component
{
    protected $listeners = ['reload' => '$refresh'];
    public function render()
    {
        return view('livewire.pages.paket.index', [
            'datas' => Paket::get()
        ]);
    }
}
