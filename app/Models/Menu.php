<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['dia', 'guisado', 'sopa_guarnicion', 'agua', 'postre', 'id_escuela'];

    public function escuela()
    {
        return $this->belongsTo(School::class, 'id_escuela');
    }

}
