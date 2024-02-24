<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CustomerForm extends Form
{
    public $name = "";
    public $telp = "";
    public $alamat = "";
    public ?Customer $customer;

    public function setCustomer(Customer $customer){
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->telp = $customer->telp;
        $this->alamat = $customer->alamat;
    }

    public function store(){
        $valid = $this->validate([
            'name' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
        ]);

        Customer::create($valid);
        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'name' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
        ]);

        $this->customer->update($valid);
        $this->reset();
    }
}
