<div class="space-y-6">
    <div class="flex flex-col md:flex-row justify-between">
        <div class="flex gap-1">
            <input type="text" class="input input-bordered" placeholder="Pencarian" wire:model.live="cari">
        </div>
        <button class="btn input-bordered" wire:click="$dispatch('createCustomer')">
            <x-tabler-circle-plus class="icon-5" />
            <span>Tambah customer</span>
        </button>
    </div>

    {{-- <div class="grid grid-cols-2 gap-6">
        @foreach ($datas as $data)
            @livewire('pages.customer.card', ['customer' => $data], key($data->id))
        @endforeach
    </div> --}}

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Nomor telepon</th>
                <th>Alamat</th>
                <th class="text-center">Action</th>
            </thead>
            @forelse ($datas as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->telp }}</td>
                    <td>{{ Str::limit($data->alamat, 40) }}</td>
                    <td>
                        <div class="flex gap-1 justify-center">
                            <a href="{{ route('customer.show', $data->id) }}" class="btn btn-xs input-bordered">
                                Detail
                            </a>
                            <button class="btn btn-xs btn-square input-bordered"
                                wire:click="$dispatch('editCustomer', {customer:{{ $data->id }}})">
                                <x-tabler-edit class="icon-4" />
                            </button>
                            <button class="btn btn-xs btn-square input-bordered"
                                wire:confirm="Anda yakin akan menghapus customer ini?"
                                wire:click="$dispatch('deleteCustomer', {customer:{{ $data->id }}})">
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

    @livewire('pages.customer.actions')
</div>
