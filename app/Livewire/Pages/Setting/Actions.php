<?php

namespace App\Livewire\Pages\Setting;

use App\Livewire\Forms\SettingForm;
use App\Models\Pengaturan;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;
    public ?SettingForm $form;

    #[On('editPengaturan')]
    public function editPengaturan(Pengaturan $pengaturan){
        $this->show = true;
        $this->form->setPengaturan($pengaturan);
    }

    #[On('createPengaturan')]
    public function createPengaturan(){
        $this->show = true;
    }

    public function simpan(){
        if (isset($this->form->pengaturan)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }

        $this->show = false;
        $this->dispatch('reload');
    }

    #[On('deletePengaturan')]
    public function deletePengaturan(Pengaturan $pengaturan){
        $pengaturan->delete();
        $this->dispatch('reload');
    }

    public function close(){
        $this->show = false;
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.pages.setting.actions', [
            'type_list' => Pengaturan::$typeList
        ]);
    }
}
