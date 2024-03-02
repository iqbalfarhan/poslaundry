<div class="space-y-6">
    <div class="flex flex-col md:flex-row justify-between">
        <div class="flex gap-1">
            <input type="text" class="input input-bordered" placeholder="Pencarian" wire:model.live="cari">
        </div>
        <button class="btn input-bordered" wire:click="$dispatch('createUser')">
            <x-tabler-circle-plus class="icon-5" />
            <span>Tambah user</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat email</th>
                <th class="text-center">Action</th>
            </thead>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        <div class="flex gap-1 justify-center">
                            <button class="btn btn-xs btn-square input-bordered"
                                wire:click="$dispatch('editUser', {user:{{ $data->id }}})">
                                <x-tabler-edit class="icon-4" />
                            </button>
                            <button class="btn btn-xs btn-square input-bordered"
                                wire:confirm="Anda yakin akan menghapus user ini?"
                                wire:click="$dispatch('deleteUser', {user:{{ $data->id }}})">
                                <x-tabler-trash class="icon-4" />
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    @livewire('pages.user.actions')
</div>
