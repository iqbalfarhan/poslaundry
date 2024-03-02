<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'type',
        'value',
    ];

    public static $typeList = [
        'tulisan',
        'angka',
        'ya_tidak',
        'gambar',
        'tulisan panjang'
    ];
}
