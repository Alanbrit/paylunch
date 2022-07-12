<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name',
        'apellidos',
        'numero',
        'numero_2',
        'saldo',
        'email',
        'password',
        'id_grupo',
        'id_escuela',
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

    public function isAdmin()
    {
        return $this->rol=="admin";
    }
    public function isTutor()
    {
        return $this->rol=="tutor";
    }
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'id_grupo');
    }
    public function school()
    {
        return $this->belongsTo(School::class, 'id_escuela');
    }
        

}
