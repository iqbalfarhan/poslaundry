<?php

namespace App\Livewire\Pages;

use App\Models\Paket;
use App\Models\Transaksi;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $tanggal = date('Y-m-d');
        return view('livewire.pages.home', [
            'pengambilan' => Transaksi::whereDate('tanggal_selesai', $tanggal)->get(),
            'orderhariini' => Transaksi::whereDate('tanggal_order', $tanggal)->count(),
            'paket' => Paket::count()
        ]);
    }
}
