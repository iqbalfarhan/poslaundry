<div>
    <input type="checkbox" id="formUser" class="modal-toggle" wire:model.live="show" />
    <div class="modal" role="dialog">
        <form class="modal-box space-y-8 max-w-sm" wire:submit="simpan">

            <div class="divider">
                <h3 class="font-semibold text-xl">Data user</h3>
            </div>

            <div class="space-y-2">
                <label class="input input-bordered flex items-center gap-2">
                    <x-tabler-user class="icon-5" />
                    <input type="text" class="grow" wire:model="form.name" placeholder="Nama user">
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    <x-tabler-phone class="icon-5" />
                    <input type="text" class="grow" wire:model="form.email" placeholder="Email telepon">
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
