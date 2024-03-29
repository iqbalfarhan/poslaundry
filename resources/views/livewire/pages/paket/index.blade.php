<div class="space-y-6">
    <div class="flex flex-col md:flex-row justify-between">
        <div class="flex gap-1">
            <input type="text" class="input input-bordered" placeholder="Pencarian" wire:model.live="cari">
        </div>
        <button class="btn input-bordered" wire:click="$dispatch('createPaket')">
            <x-tabler-circle-plus class="icon-5" />
            <span>Tambah paket</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama paket</th>
                <th>Harga paket</th>
                <th>Satuan</th>
                <th>Tampilkan</th>
                <th class="text-center">Action</th>
            </thead>
            @forelse ($datas as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>Rp. {{ number_format($data->harga, 0, ',', '.') }}</td>
                    <td>{{ $data->satuan }}</td>
                    <td>
                        <input type="checkbox" class="toggle toggle-primary toggle-sm"
                            wire:change="togglePaket({{ $data->id }})" @checked($data->show)>
                    </td>
                    <td>
                        <div class="flex gap-1 justify-center">
                            <button class="btn btn-xs btn-square input-bordered"
                                wire:click="$dispatch('editPaket', {paket:{{ $data->id }}})">
                                <x-tabler-edit class="icon-4" />
                            </button>
                            <button class="btn btn-xs btn-square input-bordered"
                                wire:click="$dispatch('deletePaket', {paket:{{ $data->id }}})">
                                <x-tabler-trash class="icon-4" />
                            </button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100%">
                        @livewire('partial.nocontent')
                    </td>
                </tr>
            @endforelse
        </table>
    </div>
    @livewire('pages.paket.actions')
</div>
