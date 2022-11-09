<?php

namespace App\Models;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengambilan extends Model
{
    use HasFactory;

    protected $table = 'pengambilan';
    protected $guarded = [];  

    public function transaksis(){
        return $this->belongsTo(Transaksi::class,'transaksi_id','id');
    }
}
