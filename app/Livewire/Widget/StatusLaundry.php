<?php

namespace App\Livewire\Widget;

use App\Models\Transaksi;
use Livewire\Component;

class StatusLaundry extends Component
{
    public $datasets = [];

    public function mount(){
        $datas = Transaksi::get()->groupBy('status')->map(function ($transaksis) {
            return $transaksis->count();
        });

        foreach ($datas as $status => $value) {
            $this->datasets[] = [
                'label' => ucfirst($status),
                'value' => $value
            ];
        }
    }

    public function render()
    {
        return view('livewire.widget.status-laundry');
    }
}
