<div>
    <input type="checkbox" id="formPengaturan" class="modal-toggle" wire:model.live="show" />
    <div class="modal" role="dialog">
        <form class="modal-box space-y-8 max-w-sm" wire:submit="simpan">

            <div class="divider">
                <h3 class="font-semibold text-xl">Update Pengaturan</h3>
            </div>

            <div class="space-y-2">
                <div class="form-control">
                    @if ($form->type == 'tulisan')
                        <input type="text" class="@error('form.value') input-error @enderror input input-bordered"
                            wire:model="form.value" placeholder="Value">
                    @elseif ($form->type == 'angka')
                        <input type="number" class="@error('form.value') input-error @enderror input input-bordered"
                            wire:model="form.value" placeholder="Value">
                    @elseif ($form->type == 'gambar')
                        <input type="file"
                            class="@error('form.value') file-input-error @enderror file-input file-input-bordered"
                            wire:model="form.value" placeholder="Value" accept="image/*">
                    @elseif ($form->type == 'tulisan panjang')
                        <textarea class="@error('form.value') textarea-error @enderror textarea textarea-bordered w-full" rows="5"
                            wire:model="form.value" placeholder="Value"></textarea>
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
