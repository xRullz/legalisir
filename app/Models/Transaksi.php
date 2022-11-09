<?php

namespace App\Models;

use App\Models\Ijasah;
use App\Models\Pengiriman;
use App\Models\Pengambilan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $guarded = [];  

    public function ijasah(){
        return $this->hasMany(Ijasah::class, 'ijasah_id','id');
    }

    public function pengambilan(){
        return $this->hasMany(Pengambilan::class,'transaksi_id','id');
    } 

    public function pengiriman(){
        return $this->hasMany(Pengiriman::class,'transaki_id','id');
    }
}
