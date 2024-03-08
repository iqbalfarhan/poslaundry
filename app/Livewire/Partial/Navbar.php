<?php

namespace App\Livewire\Partial;

use App\Models\Pengaturan;
use Livewire\Component;

class Navbar extends Component
{
    public $title;

    public function mount($title = null)
    {
        $nama = Pengaturan::where('key', 'nama')->first()->value;
        $this->title = $title ?? $nama;
    }

    public function render()
    {
        return view('livewire.partial.navbar');
    }
}
