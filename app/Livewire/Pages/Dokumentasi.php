<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\File;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dokumentasi')]
class Dokumentasi extends Component
{
    public $page;

    public function render()
    {
        $lists = File::allFiles(resource_path('views/markdown'));
        $page = $this->page ?? $lists[0]->getFilename();
        $this->page = $page;

        return view('livewire.pages.dokumentasi', [
            'content' => file_get_contents(resource_path("views/markdown/{$page}")),
            'lists' => $lists
        ]);
    }
}
