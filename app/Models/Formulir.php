<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function apl2(){
        return $this->hasMany(Apl2::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
