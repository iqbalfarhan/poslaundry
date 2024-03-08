<?php

namespace App\Livewire\Partial;

use App\Models\Pengaturan;
use Livewire\Component;

class Applogo extends Component
{
    public function render()
    {
        return view('livewire.partial.applogo', [
            'setting' => Pengaturan::pluck('value', 'key')
        ]);
    }
}
