<div class="space-y-8">

    <div class="grid md:grid-cols-6 gap-6">
        <div class="md:col-span-2 md:row-span-2">
            @livewire('widget.pendapatan-bulanan')
        </div>
        @livewire('widget.square', ['number' => $orderhariini, 'desc' => 'Order Hari ini'])
        @livewire('widget.square', ['number' => $pengambilan->count(), 'desc' => 'Diambil Hari ini'])
        <div class="md:col-span-2 md:row-span-2">
            @livewire('widget.status-laundry')
        </div>
        <div class="md:col-span-2 md:row-span-2">
            @livewire('widget.status')
        </div>
        <div class="card card-compact border-2 aspect-auto md:col-span-2">
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
