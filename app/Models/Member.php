<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['nama','alamat','no_tlp'];
    public function Member(){
        return $this->hasMany(Member::class, 'id','id');
    }
}
