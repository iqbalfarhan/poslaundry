<?php

namespace App\Livewire\Pages\Setting;

use App\Models\Pengaturan;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['reload' => '$refresh'];

    public function kembalikanPengaturan(){
        Artisan::call('db:seed PengaturanSeeder');
        $this->dispatch('reload');
    }

    public function render()
    {
        return view('livewire.pages.setting.index', [
            'datas' => Pengaturan::get()
        ]);
    }
}
