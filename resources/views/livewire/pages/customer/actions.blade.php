<div>
    <input type="checkbox" id="formCustomer" class="modal-toggle" wire:model.live="show" />
    <div class="modal" role="dialog">
        <form class="modal-box space-y-6" wire:submit="simpan">

            <div class="divider">
                <h3 class="font-bold text-lg">Form data customer</h3>
            </div>

            <div class="space-y-2">
                <label class="input input-bordered flex items-center gap-2">
                    <x-tabler-user class="icon-5" />
                    <input type="text" class="grow" wire:model="form.name" placeholder="Nama customer">
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    <x-tabler-phone class="icon-5" />
                    <input type="text" class="grow" wire:model="form.telp" placeholder="Nomor telepon">
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    <x-tabler-map-pin class="icon-5" />
                    <input type="text" class="grow" wire:model="form.alamat" placeholder="Alamat customer">
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
