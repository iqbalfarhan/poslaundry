<div class="card card-compact w-full border-2 border-{{ $color }}/15 bg-{{ $color }}/10">
    <div class="card-body space-y-4 border-b-2 border-{{ $color }}/15">
        <div class="flex justify-between">
            <div class="text-xl flex flex-col items-start">
                <small class="text-xs opacity-50">#{{ $transaksi->kode }}</small>
                <span class="font-bold">Rp. {{ $transaksi->rupiah }}</span>
                <small class="text-xs capitalize opacity-70">{{ $transaksi->status }}</small>
            </div>
            <div class="flex gap-2 tooltip" data-tip="{{ $transaksi->status }}">
                <a href="{{ route('transaksi.detail', $transaksi) }}" class="btn btn-circle bg-{{ $color }}/30">
                    <x-icon name="{{ $transaksi->icon }}" />
                </a>
            </div>
        </div>
    </div>
    <div class="card-body bg-base-200 rounded-b-xl">
        <div class="flex justify-between items-center text-xs">
            <div>{{ $transaksi->customer->name }}</div>
            <div>{{ $transaksi->tanggal_order->format('d M Y') }}</div>
        </div>
    </div>

    @livewire('pages.transaksi.show')
</div>
