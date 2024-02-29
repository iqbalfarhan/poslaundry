<div class="space-y-8">

    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-2 row-span-2">
            @livewire('widget.pendapatan-bulanan')
        </div>
        <div class="card card-compact border-2 aspect-square">
            <div class="card-body text-center">
                <div class="grid place-content-center h-full">
                    <h1 class="text-6xl font-bold">23</h1>
                    <div class="text-lg">Dalam proses</div>
                </div>
            </div>
        </div>
        <div class="card card-compact border-2 aspect-square">
            <div class="card-body text-center">
                <div class="grid place-content-center h-full">
                    <h1 class="text-6xl font-bold">20</h1>
                    <div class="text-lg">Sudah selesai</div>
                </div>
            </div>
        </div>
        <div class="col-span-2 row-span-2">
            @livewire('widget.status-laundry')
        </div>
        <div class="col-span-2 row-span-2">
            @livewire('widget.status')
        </div>
        <div class="card card-compact border-2 aspect-auto col-span-2">
            <div class="card-body flex justify-between">
                <div class="line-clamp-3">
                    Klik ini untuk proses pembuatan transaksi laundry baru.
                </div>
                <div class="card-actions justify-between items-baseline">
                    <div class="card-title">Buat transaksi</div>
                    <a href="{{ route('transaksi.create') }}" class="btn btn-circle" wire:navigate>
                        <x-tabler-chevron-right />
                    </a>
                </div>
            </div>
        </div>
        @livewire('widget.date')
        @livewire('pages.user.card', [
            'lazy' => true,
        ])
    </div>

    <h3 class="text-xl font-bold">Pengambilan hari ini :</h3>

    <div class="grid grid-cols-3 gap-6">
        @forelse ($pengambilan as $ambil)
            @livewire('pages.transaksi.card', ['data' => $ambil, 'color' => $ambil->color], key($ambil->id))
        @empty
            <div class="col-span-full">
                @livewire('partial.nocontent')
            </div>
        @endforelse
    </div>
</div>
