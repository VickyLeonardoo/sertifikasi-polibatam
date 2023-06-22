<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function unit(){
        return $this->belongsTo(Unit::class);
    }

    public function pertanyaan(){
        return $this->hasMany(Pertanyaan::class);
    }

    public function apl2(){
        return $this->belongsTo(Apl2::class);
    }

}
