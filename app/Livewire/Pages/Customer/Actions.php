<?php

namespace App\Livewire\Pages\Customer;

use App\Livewire\Forms\CustomerForm;
use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;
    public ?CustomerForm $form;

    #[On('editCustomer')]
    public function editCustomer(Customer $customer){
        $this->show = true;
        $this->form->setCustomer($customer);
    }

    #[On('createCustomer')]
    public function createCustomer(){
        $this->show = true;
    }

    public function simpan(){
        if ($this->form->customer) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }

        $this->show = false;
        $this->dispatch('reload');
    }

    #[On('deleteCustomer')]
    public function deleteCustomer(Customer $customer){
        $customer->delete();
        $this->dispatch('reload');
    }

    public function close(){
        $this->show = false;
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.pages.customer.actions');
    }
}
