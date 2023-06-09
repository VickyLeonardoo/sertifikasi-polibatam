<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apl2 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function formulir(){
        return $this->belongsTo(Formulir::class);
    }

    public function elemen(){
        return $this->hasMany(Elemen::class);
    }

}
