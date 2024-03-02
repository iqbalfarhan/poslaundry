<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Customer;
use App\Models\Paket;
use App\Models\Transaksi;
use Livewire\Attributes\On;
use Livewire\Component;

class Edit extends Component
{
    protected $listeners = ['reload' => '$refresh'];
    public $items = [];
    public $customer_id;
    public $tanggal;
    public $tanggal_selesai;
    public Transaksi $transaksi;

    #[On('doneItem')]
    public function doneItem($newItem){
        $this->items[] = $newItem;
    }

    public function totalHarga(){
        return array_sum(array_map(function($item) {
            return Paket::find($item['paket_id'])->harga * $item['qty'];
        }, $this->items));
    }

    public function removeItem($index){
        array_splice($this->items, $index, 1);
    }

    public function deleteTransaksi(){
        $this->transaksi->delete();
        $this->redirect(route('transaksi.index'), navigate:true);
    }

    public function mount(Transaksi $transaksi){
        $this->tanggal = date('Y-m-d', strtotime($transaksi->tanggal_order));
        $this->tanggal_selesai = date('Y-m-d', strtotime($transaksi->tanggal_selesai));
        $this->customer_id = $transaksi->customer_id;

        foreach($transaksi->items as $item){
            $this->items[] = [
                'paket_id' => Paket::where('name', $item->name)->first()->id,
                'qty' => $item->qty,
            ];
        }
    }

    public function simpan(){
        $valid = $this->validate([
            'tanggal' => 'required',
            'tanggal_selesai' => 'required',
            'items' => 'required',
            'customer_id' => 'required',
        ]);

        $valid['total_harga'] = $this->totalHarga();
        $valid['tanggal_order'] = $this->tanggal;
        $valid['kode'] = time();

        foreach ($this->items as $key => $item) {
            $paket = Paket::find($item['paket_id']);
            $valid['items'][$key] = [
                'name' => $paket->name,
                'harga' => $paket->harga,
                'qty' => $item['qty'],
                'subtotal' => $item['qty'] * $paket->harga,
            ];
        }

        $valid['total'] = $this->totalHarga();
        $new = $this->transaksi;

        $new->update($valid);

        $this->redirect(route('transaksi.index'), navigate:true);
    }

    public function render()
    {
        return view('livewire.pages.transaksi.edit', [
            'customers' => Customer::pluck('name', 'id')
        ]);
    }
}
