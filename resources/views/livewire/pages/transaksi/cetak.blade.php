<div class="grid grid-cols-2 gap-6 max-w-4xl mx-auto">
    <div class="card border-2 bg-white mx-auto text-black w-full row-span-2">
        <div class="card-body space-y-6 text-xs">
            <div class="text-right text-lg">No: {{ $transaksi->pad_id }}</div>
            <div class="text-center space-y-4">
                <div class="text-3xl font-bold">{{ $setting['nama'] }}</div>
                <div>{{ $setting['alamat'] }}</div>
            </div>
            <table>
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
    <div class="card border-2 print:hidden">
        <div class="card-body space-y-6 text-sm">
            <h3 class="card-title">Cetak resi</h3>

            <p>Klik cetak resi dan hubungkan ek printer untuk print resi.</p>

            <div class="card-actions">
                <button class="btn btn-primary">
                    <x-tabler-printer class="icon-5" />
                    <span>Cetak resi</span>
                </button>
            </div>
        </div>
    </div>
    <div class="card border-2 print:hidden">
        <div class="card-body space-y-6 text-sm">
            <h3 class="card-title">Pengaturan aplikasi</h3>

            <p>Klik tombol berikut ini untuk edit pengaturan nama, alamat dan logo aplikasi.</p>

            <div class="card-actions">
                <a href="{{ route('setting.index') }}" class="btn btn-neutral" wire:navigate="true">
                    <x-tabler-settings class="icon-5" />
                    <span>Pengaturan aplikasi</span>
                </a>
            </div>
        </div>
    </div>
</div>
