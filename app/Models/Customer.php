<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'telp',
        'alamat',
    ];

    public function transaksis(){
        return $this->hasMany(Transaksi::class);
    }
}
