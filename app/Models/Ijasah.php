<?php

namespace App\Models;

use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ijasah extends Model
{
    use HasFactory;

    protected $table = 'ijasah';
    protected $guarded = [];  

    public function users(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
     public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'ijasah_id','id');
     }
}
