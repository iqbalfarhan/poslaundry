<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Paket;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tanggal = fake()->date('2024-m-d');
        $paket = Paket::find(fake()->randomElement(Paket::pluck('id')));

        $qty = rand(1, 2);
        $items = [
            [
                'name' => $paket->name,
                'harga' => $paket->harga,
                'qty' => $qty,
                'subtotal' => $qty * $paket->harga,
            ]
        ];

        return [
            'kode' => time(),
            'tanggal_order' => $tanggal,
            'tanggal_selesai' => date('Y-m-d', strtotime($tanggal. '+2 days')),
            'items' => collect($items),
            'customer_id' => fake()->randomElement(Customer::pluck('id')),
            'total' => $items[0]['subtotal'],
            'status' => fake()->randomElement(array_keys(Transaksi::$statusList))
        ];
    }
}
