<?php

namespace App\Livewire\Pages\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;
    public ?UserForm $form;

    #[On('editUser')]
    public function editUser(User $user){
        $this->show = true;
        $this->form->setUser($user);
    }

    #[On('createUser')]
    public function createUser(){
        $this->show = true;
    }

    public function simpan(){
        if (isset($this->form->user)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }

        $this->show = false;
        $this->dispatch('reload');
    }

    #[On('deleteUser')]
    public function deleteUser(User $user){
        $user->delete();
        $this->dispatch('reload');
    }

    public function close(){
        $this->show = false;
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.pages.user.actions');
    }
}
