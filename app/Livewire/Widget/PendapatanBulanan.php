<?php

namespace App\Livewire\Widget;

use App\Models\Transaksi;
use Livewire\Component;

class PendapatanBulanan extends Component
{
    public $datasets = [];

    public function mount(){
        $transaksi = Transaksi::whereYear('tanggal_order', date('Y'))->orderBy('tanggal_order')->get()->groupBy('bulan')->map(function($q){
            return $q->sum('total');
        });

        foreach ($transaksi as $bulan => $total) {
            $this->datasets[] = [
                'bulan' => $bulan,
                'value' => $total,
            ];
        }
    }

    public function render()
    {
        list($tahunini, $bulanini) = explode('-', date('Y-m'));
        $bulanini = Transaksi::whereMonth('tanggal_order', $bulanini)->whereYear('tanggal_order', $tahunini)->sum('total');

        list($tahunlalu, $bulanlalu) = explode('-', date('Y-m', strtotime('-1 months')));
        $bulanlalu = Transaksi::whereMonth('tanggal_order', $bulanlalu)->whereYear('tanggal_order', $tahunlalu)->sum('total');

        return view('livewire.widget.pendapatan-bulanan', [
            'bulanini' => $bulanini,
            'bulanlalu' => $bulanlalu,
        ]);
    }
}
