<div class="card card-compact w-full border-2 border-{{ $color }} bg-{{ $color }}/10 tooltip">
    <div class="card-body space-y-4 border-b-2 border-{{ $color }}">
        <div class="flex justify-between">
            <div class="text-xl flex flex-col items-start">
                <small class="text-xs opacity-50">#{{ $transaksi->kode }}</small>
                <span class="font-bold">Rp. {{ $transaksi->rupiah }}</span>
                <small class="text-xs capitalize opacity-70">{{ $transaksi->customer->name }}</small>
            </div>
            <div class="tooltip" data-tip="{{ ucfirst($transaksi->status) }}">
                <button class="btn btn-circle btn-ghost"
                    wire:click="$dispatch('changeStatus', {'transaksi' : {{ $transaksi->id }}})">
                    <x-icon name="{{ $transaksi->icon ?? 'home' }}" class="icon-8" />
                </button>
            </div>
        </div>
    </div>
    <div class="flex p-2 bg-base-200 justify-between items-center rounded-b-xl">
        <div class="flex">
            <a href="{{ route('transaksi.cetak', $transaksi) }}" class="btn btn-xs btn-ghost">
                Print
            </a>
            <a href="{{ route('transaksi.edit', $transaksi) }}" class="btn btn-xs btn-ghost">
                Edit
            </a>
        </div>
        <button class="btn btn-xs btn-ghost"
            wire:click="$dispatch('showTransaksi', {transaksi: {{ $transaksi->id }}})">
            {{ $transaksi->tanggal_selesai->format('d M Y') }}
        </button>
    </div>
</div>
