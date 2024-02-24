<?php

namespace App\Livewire\Partial;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Sidebar extends Component
{

    #[On('logout')]
    public function logout(){
        Auth::logout();
        $this->redirect(route('login'), navigate:true);
    }

    public function render()
    {
        return view('livewire.partial.sidebar');
    }
}
