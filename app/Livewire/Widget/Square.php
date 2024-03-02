<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Square extends Component
{
    public $number;
    public $desc;

    public function mount($number = 0, $desc = "Desc"){
        $this->number = $number;
        $this->desc = $desc;
    }

    public function render()
    {
        return view('livewire.widget.square');
    }
}
