<?php

namespace App\Livewire\Pages\Customer;

use App\Models\Customer;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Customer')]
class Show extends Component
{
    public Customer $customer;

    public function mount(Customer $customer){
        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.pages.customer.show');
    }
}
