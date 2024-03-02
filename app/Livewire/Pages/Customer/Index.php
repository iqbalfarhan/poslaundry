<?php

namespace App\Livewire\Pages\Customer;

use App\Models\Customer;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Data customer')]
class Index extends Component
{
    public $cari;
    protected $listeners = ['reload' => '$refresh'];

    public function render()
    {
        return view('livewire.pages.customer.index', [
            'datas' => Customer::when($this->cari, function($q){
                $q->where('name', 'like', "%{$this->cari}%");
            })->get()
        ]);
    }
}
