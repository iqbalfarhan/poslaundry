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
            'illustration' => 'illustration/check_boxes.svg',
            'color' => 'neutral',
            'icon' => 'tabler-list',
            'as' => 'antri',
            'keterangan' => 'Order baru saja diinput dan belum masuk ketahap pengerjaan'
        ],
        'dalam pengerjaan' => [
            'title' => 'dalam pengerjaan',
            'illustration' => 'illustration/speed_test.svg',
            'color' => 'success',
            'icon' => 'tabler-wash-hand',
            'as' => 'proses',
            'keterangan' => 'Order sedang dalam proses pengerjaan. biasanya memakan waktu agak lama'
        ],
        'sudah selesai' => [
            'title' => 'sudah selesai',
            'illustration' => 'illustration/certification.svg',
            'color' => 'primary',
            'icon' => 'tabler-circle-check',
            'as' => 'selesai',
            'keterangan' => 'Order laundry sudah selesai. tinggal menunggu untuk pengambilan.'
        ],
        'sudah diambil' => [
            'title' => 'sudah diambil',
            'illustration' => 'illustration/completing.svg',
            'color' => 'info',
            'icon' => 'tabler-shopping-cart',
            'as' => 'diambil',
            'keterangan' => 'Order laundry sudah selesai dan sudah diambil oleh customer.'
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
        return self::$statusList[$this->status]['icon'] ?? "home";
    }

    public function getBulanAttribute(){
        return date('F', strtotime($this->tanggal_order));
    }

    public function getPadIdAttribute(){
        return str_pad($this->id, 5, '0', STR_PAD_LEFT);
    }
}
