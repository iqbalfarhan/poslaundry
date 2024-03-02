<div>
    <input type="checkbox" id="my_card_6" class="modal-toggle" wire:model.live="show" />
    <div class="modal backdrop-blur-sm" role="dialog">
        @if ($transaksi)
            <div class="card bg-base-100 w-full max-w-md overflow-hidden">
                <div class="navbar border-b">
                    <div class="navbar-start">
                        <label for="my_card_6" class="btn btn-circle btn-ghost">
                            <x-tabler-arrow-left />
                        </label>
                    </div>
                    <div class="navbar-center flex flex-col">
                        <div>ORDER STATUS</div>
                        <small class="opacity-75">#{{ $transaksi->kode }}</small>
                    </div>
                    <div class="navbar-end">
                        <a href="{{ route('transaksi.cetak', $transaksi) }}" class="btn btn-ghost btn-circle">
                            <x-tabler-printer class="icon-5" />
                        </a>
                    </div>
                </div>
                <div class="card-body text-center space-y-6">
                    <h3 class="font-bold uppercase">{{ $transaksi->status }}...</h3>
                    <img src="{{ $transaksi->illustration }}" alt="" class="w-4/6 mx-auto skeleton p-6">
                    <div class="text-sm max-w-sm mx-auto">{{ $statusList[$transaksi->status]['keterangan'] }}</div>

                    <div class="card-actions justify-between text-xs text-left">
                        <div class="flex flex-col">
                            <div class="font-bold opacity-40">Total</div>
                            <div>Rp. {{ Number::format($transaksi->total) }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="font-bold opacity-40">Pengambilan</div>
                            <div>{{ date('d M Y', strtotime($transaksi->tanggal_selesai)) }}</div>
                        </div>
                        <div class="flex flex-col">
                            <div class="font-bold opacity-40">Customer</div>
                            <div>{{ Str::words($transaksi->customer->name, 2) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
