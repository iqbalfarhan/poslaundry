<div class="space-y-6">

    <div class="flex flex-col md:flex-row justify-between gap-2">
        <div class="flex gap-1 grow">
            <input type="text" class="input input-bordered" placeholder="Pencarian">
        </div>
        <label class="input input-bordered flex items-center gap-1">
            <button @class(['btn btn-sm', 'btn-primary' => $status == 'selesai']) wire:click="$set('status', 'selesai')">Selesai</button>
            <button @class(['btn btn-sm', 'btn-primary' => $status == 'proses']) wire:click="$set('status', 'proses')">Proses</button>
            <button @class(['btn btn-sm', 'btn-primary' => $status == 'daftar']) wire:click="$set('status', 'daftar')">Daftar</button>
        </label>
        <a href="{{ route('transaksi.create') }}" class="btn input-bordered" wire:navigate>
            <x-tabler-calendar class="icon-5" />
            Buat transaksi
        </a>
    </div>

    <div class="grid md:grid-cols-3 gap-5">
        @livewire('pages.transaksi.card')
        @livewire('pages.transaksi.card')
        @livewire('pages.transaksi.card')
        @livewire('pages.transaksi.card')
        @livewire('pages.transaksi.card')
        @livewire('pages.transaksi.card')
    </div>

    @livewire('pages.transaksi.show')
</div>
