<?php

namespace App\Livewire\Forms;

use App\Models\Paket;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PaketForm extends Form
{
    public $name = "";
    public $harga = "";
    public $satuan = "";
    public ?Paket $paket;

    public function setPaket(Paket $paket){
        $this->paket = $paket;
        $this->name = $paket->name;
        $this->harga = $paket->harga;
        $this->satuan = $paket->satuan;
    }

    public function store(){
        $valid = $this->validate([
            'name' => 'required',
            'harga' => 'required',
            'satuan' => '',
        ]);

        Paket::create($valid);
        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'name' => 'required',
            'harga' => 'required',
            'satuan' => '',
        ]);

        $this->paket->update($valid);
        $this->reset();
    }
}
