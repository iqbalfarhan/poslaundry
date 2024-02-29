<?php

namespace App\Livewire\Pages\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['reload' => '$refresh'];
    public function render()
    {
        return view('livewire.pages.user.index', [
            'datas' => User::get()
        ]);
    }
}
