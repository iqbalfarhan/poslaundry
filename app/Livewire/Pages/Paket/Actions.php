<?php

namespace App\Livewire\Pages\Paket;

use App\Livewire\Forms\PaketForm;
use App\Models\Paket;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;
    public ?PaketForm $form;

    #[On('editPaket')]
    public function editPaket(Paket $paket){
        $this->show = true;
        $this->form->setPaket($paket);
    }

    #[On('createPaket')]
    public function createPaket(){
        $this->show = true;
    }

    public function simpan(){
        if (isset($this->form->paket)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }

        $this->show = false;
        $this->dispatch('reload');
    }

    #[On('deletePaket')]
    public function deletePaket(Paket $paket){
        $paket->delete();
        $this->dispatch('reload');
    }

    public function close(){
        $this->show = false;
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.pages.paket.actions');
    }
}
