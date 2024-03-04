<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'harga',
        'show',
        'satuan',
    ];

    public function getRupiahAttribute(){
        return number_format($this->harga, 0, ',', '.');
    }

    public function scopeByShow($query){
        return $query->where('show', true);
    }
}
