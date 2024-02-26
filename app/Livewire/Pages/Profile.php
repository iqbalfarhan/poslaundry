<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Edit Profile')]
class Profile extends Component
{
    public $name;
    public $email;
    public $password;

    public function simpan(){
        $valid = $this->validate([
            'name' =>'required',
            'email' =>'required',
            'password' => 'required',
        ]);
    }

    public function mount(){
        $user = Auth::user();

        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.pages.profile');
    }
}
