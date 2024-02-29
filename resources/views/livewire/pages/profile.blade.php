<div class="card w-96 mx-auto">
    <form wire:submit="simpan" class="card-body space-y-4">
        <h3 class="card-title">Edit profile {{ config('app.name') }}</h3>
        <div class="space-y-2">
            <label class="input input-bordered flex items-center gap-2">
                <x-tabler-user-circle class="icon-5" />
                <input type="text" wire:model="name" placeholder="Nama lengkap" class="grow">
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <x-tabler-user class="icon-5" />
                <input type="email" wire:model="email" placeholder="Alamat email" class="grow">
            </label>
            <label class="input input-bordered flex items-center gap-2">
                <x-tabler-key class="icon-5" />
                <input type="password" wire:model="password" placeholder="Password baru" class="grow">
                <x-tabler-eye class="icon-5" />
            </label>
        </div>
        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-check class="icon-5" />
                <span>Simpan</span>
            </button>
        </div>
    </form>

</div>
