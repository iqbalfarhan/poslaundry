<div class="max-w-3xl mx-auto space-y-6">
    <div class="card border-2">
        <div class="card-body flex-col gap-6">
            <h3 class="card-title">Keterangan transaksi</h3>
            <div class="flex flex-col gap-2">
                <div class="flex items-center">
                    <div class="w-full max-w-48">
                        <div>Pilih customer</div>
                    </div>

                    <div class="join w-full">
                        <select type="text"
                            class="join-item select select-bordered grow @error('customer_id') select-error @enderror"
                            placeholder="Pilih customer" wire:model="customer_id">
                            <option value="">Pilih customer</option>
                            @foreach ($customers as $cust_id => $cust_name)
                                <option value="{{ $cust_id }}">{{ $cust_name }}</option>
                            @endforeach
                        </select>
                        <div class="join-item btn input-bordered" wire:click="$dispatch('createCustomer')">
                            <x-tabler-user-plus class="icon-5 cursor-pointer" />
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="w-full max-w-48">
                        <div>Tanggal input</div>
                    </div>
                    <input type="date" class="input input-bordered flex gap-2 items-center"
                        wire:model.live="tanggal">
                </div>
                <div class="flex items-center">
                    <div class="w-full max-w-48">
                        <div>Tanggal selesai</div>
                    </div>
                    <input type="date" class="input input-bordered flex gap-2 items-center"
                        wire:model.live="tanggal_selesai">
                </div>
            </div>
        </div>
    </div>

    <div class="table-wrapper border-2 @error('items') border-error @enderror">
        <div class="flex p-4 border-b justify-between items-center">
            <div class="">
                <h3 class="text-center">Daftar item</h3>
            </div>
            <button class="btn btn-primary btn-sm" wire:click="$dispatch('addItem')">
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
                        $total = number_format($paket->harga * $item['qty'], 0, ',', '.');
                    @endphp
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $paket->name }}</td>
                        <td>Rp. {{ number_format($paket->harga, 0, ',', '.') }}</td>
                        <td>{{ $item['qty'] }} {{ $paket->satuan }}</td>
                        <td>Rp. {{ $total }}</td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                <button class="btn btn-xs btn-square input-bordered">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-xs btn-square input-bordered"
                                    wire:click="removeItem({{ $key }})">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tbody class="border-t-4">
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <td>Rp. {{ number_format($this->totalHarga(), 0, ',', '.') }}</td>
                <th></th>
            </tbody>
        </table>
    </div>

    <button class="btn btn-primary" wire:click="simpan">
        <x-tabler-check class="icon-5" />
        <span>Simpan</span>
    </button>

    @livewire('pages.customer.actions')
    @livewire('pages.transaksi.add-item')
</div>
