<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detailorder extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'order_id',
        'nama',
        'panjang',
        'lebar',
        'tinggi',
        'berat',
        'jumlah',
        'total_berat',
    ];

    protected $hidden = ["deleted_at"];

}
