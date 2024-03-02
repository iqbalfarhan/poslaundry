<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Transaksi;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail transaksi')]
class Detail extends Component
{
    public $show = false;
    public Transaksi $transaksi;

    #[On('changeStatus')]
    public function changeStatus(Transaksi $transaksi){
        $this->show = true;
        $this->transaksi = $transaksi;
    }

    public function setNewStatus($status){

        $this->transaksi->status = $status;
        $this->transaksi->save();

        $this->dispatch('reload');
        $this->show = false;
    }

    public function delete(Transaksi $transaksi){
        $transaksi->delete();
        $this->redirect(route('transaksi.index'), navigate:true);
    }

    public function render()
    {
        return view('livewire.pages.transaksi.detail', [
            'statusList' => Transaksi::$statusList
        ]);
    }
}
