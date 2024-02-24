<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Status extends Component
{
    public $step = 1;

    public function render()
    {
        return view('livewire.widget.status', [
            'steps' => [
                1 => [
                    'status' => 'Belum selesai',
                    'image' => 'illustration/loading_box.svg'
                ],
                2 => [
                    'status' => 'Dalam proses',
                    'image' => 'illustration/add_to_list.svg'
                ],
                3 => [
                    'status' => 'Sudah selesai',
                    'image' => 'illustration/todo_done.svg'
                ],
                4 => [
                    'status' => 'Sudah selesai',
                    'image' => 'illustration/well_done.svg'
                ],
            ]
        ]);
    }
}
