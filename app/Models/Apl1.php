<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apl1 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function skema(){
        return $this->belongsTo(Skema::class);
    }
}
