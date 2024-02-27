<div class="space-y-6">
    @livewire('pages.customer.card')

    <div class="flex justify-between">
        <input type="date" class="input input-bordered" placeholder="Pencarian">
    </div>

    <div class="grid md:grid-cols-3 gap-5">
        @foreach ($transaksis as $transaksi)
            @livewire('pages.transaksi.card', ['data' => $transaksi], key($transaksi->id))
        @endforeach
    </div>
</div>
