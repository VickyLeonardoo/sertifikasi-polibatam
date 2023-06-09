<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'nim',
        'tempatLahir',
        'tglLahir',
        'alamat',
        'angkatan',
        'telp',
        'kelas',
        'prodi',
        'email',
        'password',
        'role_id',
        'slug',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pekerjaan(){
        return $this->hasOne(Pekerjaan::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function apl1(){
        return $this->hasOne(Apl1::class);
    }

    public function formulir(){
        return $this->hasOne(Formulir::class);
    }
}
