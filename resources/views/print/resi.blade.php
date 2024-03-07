<!DOCTYPE html>
<html lang="en" data-theme="light">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        {{-- @vite('resources/css/app.css') --}}

        <style>
            @media print {
                body * {
                    visibility: hidden;
                }

                #printable,
                #printable * {
                    visibility: visible;
                }

                #printable {
                    position: absolute;
                    left: 0;
                    top: 0;
                }

                @page {
                    size: 58mm 80mm;
                    margin: 0mm;
                }

                @media print {

                    body,
                    #printable {
                        font-family: 'Courier New', Courier, monospace;
                        font-size: 6px;
                        line-height: 1.2;
                        padding: 3mm;
                    }

                    h1,
                    h2,
                    h3,
                    h4,
                    h5,
                    h6 {
                        font-weight: bold;
                    }

                    p {
                        margin: 0;
                        padding: 0;
                    }

                }
            }

            .tr {
                text-align: right
            }

            .tc {
                text-align: center
            }

            .tl {
                text-align: left
            }
        </style>
    </head>

    <body>
        <div id="printable">
            <h2 class="tr">No: {{ $transaksi->pad_id }}</h2>
            <div class="tc">
                <h2 class="text-3xl font-bold">{{ $setting['nama'] }}</h2>
                <p>{{ $setting['alamat'] }}</p>
            </div>
            <br />
            <table style="width: 100%">
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
                    <td>Tgl order</td>
                    <td>:</td>
                    <td>{{ $transaksi->tanggal_order->format('d-m-Y') }}</td>
                </tr>
                <tr>
                    <td>Tgl pickup</td>
                    <td>:</td>
                    <td>{{ $transaksi->tanggal_selesai->format('d-m-Y') }}</td>
                </tr>
            </table>
            <br />
            <table style="width: 100%">
                <thead>
                    <th class="tl">Item</th>
                    <th class="tr">QTY</th>
                    <th class="tr">Total</th>
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
                            <td class="tr">{{ $item->qty }}</td>
                            <td class="tr">{{ Number::format($item->subtotal, locale: 'id') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tbody>
                    <td></td>
                    <td></td>
                    <td class="tr">{{ Number::format($transaksi->total, locale: 'id') }}</td>
                </tbody>
            </table>
            <br />

            <div>Harap membawa bukti transaksi ini ketika mengambil laundry anda.</div>
            <br />

            <div>
                <br />
                <br />
                <br />
                {{ $transaksi->customer->name }}
            </div>
        </div>
    </body>

    <script>
        window.print();
    </script>

</html>
