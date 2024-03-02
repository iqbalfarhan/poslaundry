<div class="space-y-6">
    <div class="flex flex-col md:flex-row justify-between">
        <div class="flex gap-1">
            <input type="text" class="input input-bordered" placeholder="Pencarian">
        </div>
        <button class="btn input-bordered" wire:click="$dispatch('createPengaturan')">
            <x-tabler-refresh class="icon-5" />
            <span>Reset pengaturan</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <td>Nama pengaturan</td>
                <td>Value</td>
                <td class="text-center">Action</td>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->key }}</td>
                        <td>
                            @if ($data->type == 'file')
                                <div class="avatar">
                                    <div class="w-6 rounded-full">
                                        <img src="{{ Storage::url($data->value) }}"
                                            alt="{{ Storage::url($data->value) }}">
                                    </div>
                                </div>
                            @else
                                {{ $data->value }}
                            @endif
                        </td>
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
