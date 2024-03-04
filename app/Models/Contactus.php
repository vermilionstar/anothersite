<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = ['nama','email','subject','pesan'];
    public function Contactus(){
        return $this->hasMany(Contactus::class, 'id','id');
    }
}
