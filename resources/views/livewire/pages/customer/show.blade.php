<div class="space-y-8">
    @livewire('pages.customer.card', ['customer' => $customer])

    <div class="flex justify-between">
        <div class="flex gap-2">
            <div class="tooltip" data-tip="Tanggal order">
                <input type="date" class="input input-bordered" placeholder="Pencarian" wire:model.live="tanggal_order">
            </div>
            <div class="tooltip" data-tip="Tanggal selesai">
                <input type="date" class="input input-bordered" placeholder="Pencarian"
                    wire:model.live="tanggal_selesai">
            </div>
        </div>
        <div class="tooltip" data-tip="Status order">
            <select class="select select-bordered" wire:model.live="status">
                <option value="">Pilih status</option>
                @foreach ($statusList as $status => $opt)
                    <option value="{{ $status }}">{{ $status }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-5">
        @foreach ($transaksis as $transaksi)
            @livewire('pages.transaksi.card', ['data' => $transaksi, 'color' => $transaksi->color], key($transaksi->id))
        @endforeach
    </div>

    @livewire('pages.transaksi.show')
    @livewire('pages.transaksi.detail')
</div>
