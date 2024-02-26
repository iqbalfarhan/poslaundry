<div class="card card-compact w-full border-2 border-success/15 bg-success/10">
    <div class="card-body space-y-4 border-b-2 border-success/15">
        <div class="flex justify-between">
            <div class="font-semibold text-xl flex flex-col items-start">
                <span>Rp. {{ $transaksi->rupiah }}</span>
                <small class="text-xs opacity-75">Berat laundry 7.5 Kg</small>
            </div>
            <button class="btn btn-circle btn-ghost bg-success/30" wire:click="$dispatch('detailTransaksi')">
                <x-tabler-ticket />
            </button>
        </div>
        {{ $transaksi->status }}
    </div>
    <div class="card-body">
        <div class="flex justify-between">
            <h3>{{ $transaksi->customer->name }}</h3>
            <div>{{ $transaksi->tanggal_order->format('d F Y') }}</div>
        </div>
    </div>
</div>
