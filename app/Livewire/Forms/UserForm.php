<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public $name = "";
    public $email = "";
    public ?User $user;

    public function setUser(User $user){
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function store(){
        $valid = $this->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $valid['password'] = "password";

        User::create($valid);
        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $this->user->update($valid);
        $this->reset();
    }
}
