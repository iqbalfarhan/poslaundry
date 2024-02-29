<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'tanggal_order',
        'tanggal_selesai',
        'items',
        'customer_id',
        'total',
        'status'
    ];

    public static $statusList = [
        'mengantri' => [
            'title' => 'mengantri',
            'illustration' => 'illustration/add_to_list.svg',
            'color' => 'neutral',
            'icon' => 'tabler-list',
            'as' => 'antri',
            'keterangan' => 'ini keterangan sebagai detail dari status ini mengantri'
        ],
        'dalam pengerjaan' => [
            'title' => 'dalam pengerjaan',
            'illustration' => 'illustration/loading_box.svg',
            'color' => 'success',
            'icon' => 'tabler-wash-hand',
            'as' => 'proses',
            'keterangan' => 'ini keterangan sebagai detail dari status ini dalam pengerjaan'
        ],
        'proses pengemasan' => [
            'title' => 'proses pengemasan',
            'illustration' => 'illustration/todo_done.svg',
            'color' => 'info',
            'icon' => 'tabler-box',
            'as' => 'dikemas',
            'keterangan' => 'ini keterangan sebagai detail dari status ini proses pengemasan'
        ],
        'sudah selesai' => [
            'title' => 'sudah selesai',
            'illustration' => 'illustration/well_done.svg',
            'color' => 'warning',
            'icon' => 'tabler-circle-check',
            'as' => 'selesai',
            'keterangan' => 'ini keterangan sebagai detail dari status ini sudah selesai'
        ],
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

    public function getIllustrationAttribute(){
        return self::$statusList[$this->status]['illustration'] ?? "primary";
    }

    public function getColorAttribute(){
        return self::$statusList[$this->status]['color'] ?? "primary";
    }

    public function getIconAttribute(){
        return self::$statusList[$this->status]['icon'] ?? "primary";
    }
}
