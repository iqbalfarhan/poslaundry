<div>
    <input type="checkbox" id="formCustomer" class="modal-toggle" wire:model.live="show" />
    <div class="modal" role="dialog">
        <form class="modal-box space-y-8" wire:submit="simpan">

            <div class="divider">
                <h3 class="font-semibold text-xl">Data paket</h3>
            </div>

            <div class="space-y-2">
                <label class="input input-bordered flex items-center gap-2">
                    <x-tabler-box class="icon-5" />
                    <input type="text" class="grow" wire:model="form.name" placeholder="Nama paket">
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    <x-tabler-currency-dollar class="icon-5" />
                    <input type="text" class="grow" wire:model="form.harga" placeholder="Harga paket">
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    <x-tabler-weight class="icon-5" />
                    <input type="text" class="grow" wire:model="form.satuan" placeholder="Satuan paket">
                </label>
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
