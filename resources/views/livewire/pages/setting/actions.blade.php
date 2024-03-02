<div>
    <input type="checkbox" id="formPengaturan" class="modal-toggle" wire:model.live="show" />
    <div class="modal" role="dialog">
        <form class="modal-box space-y-8 max-w-sm" wire:submit="simpan">

            <div class="divider">
                <h3 class="font-semibold text-xl">Pengaturan</h3>
            </div>

            <div class="space-y-2">
                <div class="form-control w-full">
                    <input type="text" class="input input-bordered" wire:model="form.key"
                        placeholder="Nama pengaturan">
                </div>
                <select wire:model.live="form.type" class="select select-bordered w-full">
                    <option value="">Pilih type</option>
                    @foreach ($type_list as $type)
                        <option value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
                <div class="form-control">
                    @if ($form->type == 'text')
                        <input type="text" class="input input-bordered" wire:model="form.value" placeholder="Value">
                    @elseif ($form->type == 'number')
                        <input type="number" class="input input-bordered" wire:model="form.value" placeholder="Value">
                    @elseif ($form->type == 'file')
                        <input type="file" class="file-input file-input-bordered" wire:model="form.value"
                            placeholder="Value">
                    @elseif ($form->type == 'longtext')
                        <textarea class="textarea textarea-bordered w-full" wire:model="form.value" placeholder="Value"></textarea>
                    @endif
                </div>
            </div>
            <div class="modal-action justify-between">
                <button type="button" wire:click="close" class="btn">Close</button>
                <button class="btn btn-primary">
                    <x-tabler-check class="icon-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
