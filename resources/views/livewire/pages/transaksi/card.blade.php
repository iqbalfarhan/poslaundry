<div @class([
    'card card-compact w-full border-2',
    'border-success/20 bg-success/10' => $transaksi->color == 'success',
    'border-primary/20 bg-primary/10' => $transaksi->color == 'primary',
    'border-neutral/20 bg-neutral/10' => $transaksi->color == 'neutral',
    'border-info/20 bg-info/10' => $transaksi->color == 'info',
])>
    <div @class([
        'card-body space-y-4 border-b-2',
        'border-success/20' => $transaksi->color == 'success',
        'border-primary/20' => $transaksi->color == 'primary',
        'border-neutral/20' => $transaksi->color == 'neutral',
        'border-info/20' => $transaksi->color == 'info',
    ])>
        <div class="flex justify-between">
            <div class="text-xl flex flex-col items-start">
                <small class="text-xs opacity-50">#{{ $transaksi->pad_id }}</small>
                <span class="font-bold">Rp. {{ $transaksi->rupiah }}</span>
                <small class="text-xs capitalize opacity-70">{{ $transaksi->customer->name }}</small>
            </div>
            <div class="tooltip" data-tip="{{ ucfirst($transaksi->status) }}">
                <button class="btn btn-circle btn-ghost btn-lg"
                    wire:click="$dispatch('changeStatus', {'transaksi' : {{ $transaksi->id }}})">
                    <x-icon name="{{ $transaksi->icon }}" class="icon-8" />
                </button>
            </div>
        </div>
    </div>
    <div @class([
        'flex p-2 justify-between items-center rounded-b-xl',
        'bg-success/15' => $transaksi->color == 'success',
        'bg-primary/15' => $transaksi->color == 'primary',
        'bg-neutral/15' => $transaksi->color == 'neutral',
        'bg-info/15' => $transaksi->color == 'info',
    ])>
        <div class="flex">
            <a href="{{ route('transaksi.cetak', $transaksi) }}" class="btn btn-xs btn-ghost">
                Print
            </a>
            <a href="{{ route('transaksi.edit', $transaksi) }}" class="btn btn-xs btn-ghost">
                Edit
            </a>
        </div>
        <button class="btn btn-xs btn-ghost" wire:click="$dispatch('showTransaksi', {transaksi: {{ $transaksi->id }}})">
            {{ $transaksi->tanggal_selesai->format('d M Y') }}
        </button>
    </div>
</div>
