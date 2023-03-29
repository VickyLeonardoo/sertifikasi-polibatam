<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skema extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function apl1(){
        return $this->hasMany(Apl1::class);
    }

    public function prodi(){
        return $this->belongsTo(Prodi::class);
    }
}
