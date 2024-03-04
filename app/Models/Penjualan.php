<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = ['id_user','id_member','id_sepatu','tgl_bayar','jumlah_bayar'];
    public function Penjualan(){
        return $this->hasMany(Penjualan::class, 'id','id');
    }
    public function User(){
        return $this->belongsTo(User::class, 'id_user','id');
    }
    public function Member(){
        return $this->belongsTo(Member::class, 'id_member','id');
    }
    public function Sepatu(){
        return $this->belongsTo(Sepatu::class, 'id_sepatu','id');
    }
}