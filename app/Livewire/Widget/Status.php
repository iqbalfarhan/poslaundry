<?php

namespace App\Livewire\Widget;

use App\Models\Transaksi;
use Livewire\Component;

class Status extends Component
{
    public $step = 0;

    public function increase(){
        $count = count(Transaksi::$statusList) - 1;
        if ($this->step != $count) {
            $this->step++;
        }
    }

    public function addTime(){
        $count = count(Transaksi::$statusList) - 1;
        if ($this->step != $count) {
            $this->step++;
        }
        else{
            $this->step = 0;
        }
    }

    public function decrease(){
        if ($this->step != 0) {
            $this->step--;
        }
    }

    public function render()
    {
        return view('livewire.widget.status', [
            'steps' => array_values(Transaksi::$statusList)
        ]);
    }
}
