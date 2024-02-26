<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Customer;
use App\Models\Paket;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Buat transaksi')]
class Create extends Component
{
    public $items = [
        [
            'paket_id' => 11,
            'berat' => 7.5,
        ],
        [
            'paket_id' => 20,
            'berat' => 1,
        ]
    ];

    public $tanggal;
    public $tanggal_selesai;

    public function mount(){
        $tanggal = date('Y-m-d');
        $this->tanggal = $tanggal;
        $this->tanggal_selesai = date('Y-m-d', strtotime('+2 days'));
    }

    public function render()
    {
        return view('livewire.pages.transaksi.create', [
            'customers' => Customer::pluck('name', 'id')
        ]);
    }
}
