<?php

namespace App\Livewire\Pages\Setting;

use App\Models\Pengaturan;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['reload' => '$refresh'];

    public function kembalikanPengaturan(){
        $logo = Pengaturan::where('key', 'logo')->first();

        if (isset($logo->value)) {
            Storage::delete($logo->value);
        }

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
