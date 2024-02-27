<form wire:submit="login" class="card-body space-y-4">
    <h3 class="card-title">Masuk {{ config('app.name') }}</h3>
    <div class="space-y-2">
        <label class="input input-bordered flex items-center gap-2">
            <x-tabler-user class="icon-5" />
            <input type="email" wire:model="email" placeholder="Email address" class="grow">
        </label>
        <label class="input input-bordered flex items-center gap-2">
            <x-tabler-key class="icon-5" />
            <input type="{{ $pstype }}" wire:model="password" placeholder="Secure Password" class="grow">
            <x-tabler-eye class="icon-5 cursor-pointer" wire:click="tooglePsType" />
        </label>
    </div>
    <div class="card-actions justify-end">
        <button class="btn btn-primary">
            <x-tabler-chevron-right class="icon-5" />
            <span>Login</span>
        </button>
    </div>
</form>
