<?php

namespace App\Livewire\Forms;

use App\Models\Pengaturan;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SettingForm extends Form
{
    public $key = "";
    public $type = "text";
    public $value = "";
    public ?Pengaturan $pengaturan;

    public function setPengaturan(Pengaturan $pengaturan){
        $this->pengaturan = $pengaturan;
        $this->key = $pengaturan->key;
        $this->type = $pengaturan->type;
        $this->value = $pengaturan->value;
    }

    public function store(){
        $valid = $this->validate([
            'key' => 'required',
            'type' => 'required',
            'value' => 'required',
        ]);

        if ($this->type == "gambar") {
            $this->value->store('setting');
            $valid['value'] = $this->value->hashName('setting');
        }

        Pengaturan::create($valid);
        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'key' => 'required',
            'type' => 'required',
            'value' => 'required',
        ]);

        if ($this->type == "gambar") {
            $this->value->store('setting');
            $valid['value'] = $this->value->hashName('setting');
        }


        $this->pengaturan->update($valid);
        $this->reset();
    }
}
