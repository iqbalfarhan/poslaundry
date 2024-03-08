<div class="space-y-6">
    <div class="flex flex-col md:flex-row justify-between">
        <div class="flex gap-1">
            <input type="text" class="input input-bordered" placeholder="Pencarian">
        </div>
        <button class="btn input-bordered" wire:confirm="Apakah anda yaking untuk mereset pengaturan pos laundry"
            wire:click="kembalikanPengaturan">
            <x-tabler-refresh class="icon-5" />
            <span>Reset pengaturan</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="table table-borderless">
            <thead>
                <td>Nama pengaturan</td>
                <td>Value</td>
                <td class="text-center">Action</td>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->key }}</td>
                        <td class="whitespace-normal">
                            @if ($data->type == 'gambar')
                                <div @class(['avatar', 'placeholder' => $data->value ? false : true])>
                                    <div class="w-28 rounded-xl border-2 text-sm">
                                        @if ($data->value)
                                            <img src="{{ Storage::url($data->value) }}" alt="">
                                        @else
                                            <span>No image</span>
                                        @endif
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
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('pages.setting.actions')

</div>
