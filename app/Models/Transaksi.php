<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_order',
        'tanggal_selesai',
        'items',
        'customer_id',
        'total',
        'status'
    ];

    public static $statusList = [
        'mengantri',
        'dalam pengerjaan',
        'proses pengemasan',
        'sudah selesai',
    ];

    protected $casts = [
        'tanggal_order' => 'date',
        'tanggal_selesai' => 'date',
        'items' => 'object',
    ];

    public function getRupiahAttribute(){
        return number_format($this->total, 0, ',', '.');
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
