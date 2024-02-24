<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
    public $status = "selesai";

    public function render()
    {
        return view('livewire.pages.home');
    }
}
