<div class="space-y-6">
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quis voluptas ipsum ipsam laboriosam eveniet
        repudiandae provident. Fugit, illo unde facere ipsam architecto nihil quaerat hic. Ipsa at distinctio facere!
    </div>

    <div class="flex justify-between">
        <input type="date" class="input input-bordered" placeholder="Pencarian">
    </div>

    <div class="grid md:grid-cols-3 gap-5">
        @foreach ($transaksis as $transaksi)
            @livewire('pages.transaksi.card', ['data' => $transaksi], key($transaksi->id))
        @endforeach
    </div>
</div>
