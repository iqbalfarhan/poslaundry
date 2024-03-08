<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $pstype = "password";

    public function login(){
        $valid = $this->validate([
            'email' =>'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($valid)) {
            return $this->redirect("/", navigate:true);
        }
        else{
            $this->addError('email', 'Please enter a valid email');
        }
    }

    public function tooglePsType(){
        $this->pstype = $this->pstype == "password"? "text" : "password";
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
