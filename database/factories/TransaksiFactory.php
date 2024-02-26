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
        $tanggal = fake()->date();
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
            'tanggal_order' => $tanggal,
            'tanggal_selesai' => date('Y-m-d', strtotime($tanggal. '+1 days')),
            'items' => json_encode($items),
            'customer_id' => fake()->randomElement(Customer::pluck('id')),
            'total' => $items[0]['subtotal'],
            'status' => fake()->randomElement(Transaksi::$statusList)
        ];
    }
}
