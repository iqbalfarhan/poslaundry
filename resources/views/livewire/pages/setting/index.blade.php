<div class="space-y-6">
    <div class="flex flex-col md:flex-row justify-between">
        <div class="flex gap-1">
            <input type="text" class="input input-bordered" placeholder="Pencarian">
        </div>
        <button class="btn input-bordered" wire:click="$dispatch('createPengaturan')">
            <x-tabler-circle-plus class="icon-5" />
            <span>Tambah pengaturan</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <td>No</td>
                <td>Key</td>
                <td>Type</td>
                <td>Value</td>
                <td class="text-center">Action</td>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->key }}</td>
                        <td>{{ $data->type }}</td>
                        <td>{{ $data->value }}</td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                <button class="btn btn-xs btn-square input-bordered"
                                    wire:click="$dispatch('editPengaturan', {pengaturan:{{ $data->id }}})">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-xs btn-square input-bordered"
                                    wire:confirm="Anda yakin akan menghapus pengaturan ini?"
                                    wire:click="$dispatch('deletePengaturan', {pengaturan:{{ $data->id }}})">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('pages.setting.actions')

</div>
