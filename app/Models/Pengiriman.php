<?php

namespace App\Models;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = 'pengiriman';
    protected $guarded = [];  

    public function transaksii(){
        return $this->belongsTo(Transaksi::class,'transaksi_id','id');
    }
}
