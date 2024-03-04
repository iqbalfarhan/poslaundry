<?php

namespace App\Livewire\Pages\Customer;

use App\Models\Customer;
use App\Models\Transaksi;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Customer')]
class Show extends Component
{
    public Customer $customer;
    public $status;
    public $tanggal_order;
    public $tanggal_selesai;

    public function mount(Customer $customer){
        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.pages.customer.show', [
            'transaksis' => Transaksi::where('customer_id', $this->customer->id)->when($this->status, function($q){
                $q->where('status', $this->status);
            })->when($this->tanggal_order, function($q){
                $q->whereDate('tanggal_order', $this->tanggal_order);
            })->when($this->tanggal_selesai, function($q){
                $q->whereDate('tanggal_selesai', $this->tanggal_selesai);
            })->get(),
            'statusList' => Transaksi::$statusList
        ]);
    }
}
