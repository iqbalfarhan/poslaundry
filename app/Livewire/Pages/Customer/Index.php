<?php

namespace App\Livewire\Pages\Customer;

use App\Models\Customer;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Data customer')]
class Index extends Component
{
    protected $listeners = ['reload' => '$refresh'];
    public function render()
    {
        return view('livewire.pages.customer.index', [
            'datas' => Customer::get()
        ]);
    }
}
