<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Transaksi;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Data transaksi')]
class Index extends Component
{
    public $status = "selesai";

    public function render()
    {
        return view('livewire.pages.transaksi.index', [
            'datas' => Transaksi::get()
        ]);
    }
}
