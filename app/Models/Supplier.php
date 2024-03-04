<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['nama_supplier','nama_perusahaan','alamat','no_tlp'];
    public function Supplier(){
        return $this->hasMany(Supplier::class, 'id','id');
    }
}
