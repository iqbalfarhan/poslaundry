<?php

namespace App\Livewire\Pages\Setting;

use App\Models\Pengaturan;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.setting.index', [
            'datas' => Pengaturan::get()
        ]);
    }
}
