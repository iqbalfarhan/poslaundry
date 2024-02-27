<div class="flex gap-4">
    <div class="card border-2 max-w-md font-mono bg-white mx-auto text-black w-fit">
        <div class="card-body space-y-4 text-xs">
            <div class="text-3xl font-semibold">{{ config('app.name') }}</div>
            <div>Alamat : Jl lorem ipsum dolor sir amet RT4 No 944A Hp/Wa 08999779527</div>
            <table>
                <tr>
                    <td>Kode Order</td>
                    <td>:</td>
                    <td>{{ strtoupper(time()) }}</td>
                </tr>
                <tr>
                    <td>Customer</td>
                    <td>:</td>
                    <td>{{ $transaksi->customer->name }}</td>
                </tr>
                <tr>
                    <td>No Telpon</td>
                    <td>:</td>
                    <td>{{ $transaksi->customer->telp }}</td>
                </tr>
                <tr>
                    <td>Tanggal order</td>
                    <td>:</td>
                    <td>{{ $transaksi->tanggal_order->format('d M Y') }}</td>
                </tr>
                <tr>
                    <td>Tanggal pickup</td>
                    <td>:</td>
                    <td>{{ $transaksi->tanggal_selesai->format('d M Y') }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>{{ $transaksi->status }}</td>
                </tr>
            </table>
            <table class="table table-xs border-2">
                <thead>
                    <th>Item</th>
                    <th>QTY</th>
                    <th>Total</th>
                </thead>
                <tbody>
                    @foreach ($transaksi->items as $item)
                        <tr>
                            <td>
                                <div class="flex flex-col">
                                    <div>{{ $item->name }}</div>
                                    <div>{{ Number::format($item->harga, locale: 'id') }}</div>
                                </div>
                            </td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ Number::format($item->subtotal, locale: 'id') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tbody>
                    <td></td>
                    <td></td>
                    <td>{{ Number::format($transaksi->total, locale: 'id') }}</td>
                </tbody>
            </table>

            <div>Harap membawa bukti transaksi ini ketika mengambil laundry anda.</div>

            <div class="pt-20">
                <span class="border-t-2 py-2">
                    {{ $transaksi->customer->name }}
                </span>
            </div>
        </div>
    </div>
</div>
