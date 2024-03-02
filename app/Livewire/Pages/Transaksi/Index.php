<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Transaksi;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Data transaksi')]
class Index extends Component
{
    public $cari = "";
    public $status = "antri";
    protected $listeners = ['reload', '$refresh'];

    public function render()
    {
        $statusList = Transaksi::$statusList;
        return view('livewire.pages.transaksi.index', [
            'datas' => Transaksi::when($this->status, function($t) use ($statusList){
                $key = array_search($this->status, array_column($statusList, 'as'));
                $status = array_keys($statusList)[$key];
                return $t->where('status', $status);
            })->when($this->cari, function($q){
                $q->where('kode', 'like', "%{$this->cari}%");
            })->get(),
            'statuses' => $statusList
        ]);
    }
}
