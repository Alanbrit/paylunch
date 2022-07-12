<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'status', 'id_alumno', 'id_escuela', 'id_grupo'];

    public function alumno()
    {
        return $this->belongsTo(User::class, 'id_alumno');
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
