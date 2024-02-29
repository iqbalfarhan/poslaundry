<?php

namespace App\Livewire\Pages;

use App\Models\Transaksi;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $tanggal = date('Y-m-d');
        return view('livewire.pages.home', [
            'pengambilan' => Transaksi::where('tanggal_selesai', $tanggal)->get()
        ]);
    }
}
