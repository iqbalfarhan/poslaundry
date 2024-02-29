<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Transaksi;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Data transaksi')]
class Index extends Component
{
    public $status = "antri";

    public function render()
    {
        $statusList = Transaksi::$statusList;
        sleep(1);
        return view('livewire.pages.transaksi.index', [
            'datas' => Transaksi::when($this->status, function($t) use ($statusList){
                $key = array_search($this->status, array_column($statusList, 'as'));
                $status = array_keys($statusList)[$key];
                return $t->where('status', $status);
            })->get(),
            'statuses' => $statusList
        ]);
    }
}
