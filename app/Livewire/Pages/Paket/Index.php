<?php

namespace App\Livewire\Pages\Paket;

use App\Models\Paket;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Data paket')]
class Index extends Component
{
    public $cari;

    protected $listeners = ['reload' => '$refresh'];

    public function togglePaket(Paket $paket){
        $old = $paket->show;

        $paket->update([
            'show' => !$old
        ]);

        $this->dispatch('reload');
    }

    public function render()
    {
        return view('livewire.pages.paket.index', [
            'datas' => Paket::when($this->cari, function($q){
                $q->where('name', 'like', "%{$this->cari}%");
            })->get()
        ]);
    }
}
