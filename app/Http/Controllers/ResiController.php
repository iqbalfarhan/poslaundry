<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class ResiController extends Controller
{
    public function index(Transaksi $transaksi){
        return view('print.resi', [
            'transaksi' => $transaksi,
            'setting' => Pengaturan::pluck('value', 'key')
        ]);
    }
}
