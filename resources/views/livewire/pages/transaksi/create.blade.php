<div class="mx-auto space-y-6">
    <div class="grid grid-cols-3 gap-6">
        <label for="" class="input input-bordered flex gap-3 items-center">
            <x-tabler-user class="icon-5" />
            <input type="text" class="grow" placeholder="Pilih customer">
            <x-tabler-search class="icon-5 cursor-pointer" wire:click="$dispatch('createCustomer')" />
            <x-tabler-user-plus class="icon-5 cursor-pointer" wire:click="$dispatch('createCustomer')" />
        </label>
        <label for="" class="input input-bordered flex gap-2 items-center">
            <x-tabler-calendar class="icon-5" />
            <input type="date" class="grow" wire:model.live="tanggal">
        </label>
        <label for="" class="input input-bordered flex gap-2 items-center">
            <x-tabler-calendar class="icon-5" />
            <input type="date" class="grow" wire:model.live="tanggal_selesai">
        </label>
    </div>

    <div class="table-wrapper">
        <div class="flex p-4 border-b justify-between items-center">
            <div class="">
                <h3 class="text-center">Item transaksi</h3>
            </div>
            <button class="btn btn-primary btn-sm">
                <x-tabler-circle-plus class="icon-5" />
                <span>Tambah item</span>
            </button>
        </div>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Total</th>
                <th class="text-center">Action</th>
            </thead>
            <tbody>
                @foreach ($items as $key => $item)
                    @php
                        $paket = \App\Models\Paket::find($item['paket_id']);
                        $total = number_format($paket->harga * $item['berat'], 0, ',', '.');
                    @endphp
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $paket->name }}</td>
                        <td>Rp. {{ number_format($paket->harga, 0, ',', '.') }}</td>
                        <td>{{ $item['berat'] }}</td>
                        <td>Rp. {{ $total }}</td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                <button class="btn btn-xs btn-square input-bordered">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <button class="btn btn-primary">
        <x-tabler-check class="icon-5" />
        <span>Simpan</span>
    </button>

    @livewire('pages.customer.actions')
</div>
