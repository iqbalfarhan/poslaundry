<?php

namespace App\Livewire\Pages\Customer;

use App\Models\Customer;
use Livewire\Component;

class Card extends Component
{
    protected $listeners = ['reload' => '$refresh'];
    public Customer $customer;

    public function mount(Customer $customer){
        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.pages.customer.card');
    }
}
