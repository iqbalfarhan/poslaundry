<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\Customer;
use App\Models\Paket;
use App\Models\Transaksi;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Buat transaksi')]
class Create extends Component
{
    protected $listeners = ['reload' => '$refresh'];
    public $items = [];
    public $customer_id;
    public $tanggal;
    public $tanggal_selesai;

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

    public function mount(){
        $tanggal = date('Y-m-d');
        $this->tanggal = $tanggal;
        $this->tanggal_selesai = date('Y-m-d', strtotime('+2 days'));
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
        $new = Transaksi::create($valid);

        $this->redirect(route('transaksi.cetak', $new), navigate:true);
    }

    public function render()
    {
        return view('livewire.pages.transaksi.create', [
            'customers' => Customer::pluck('name', 'id')
        ]);
    }
}
