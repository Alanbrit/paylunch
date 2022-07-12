<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    protected $fillable = ['contenido', 'id_receptor', 'id_emisor'];

    public function emisor()
    {
        return $this->belongsTo(User::class, 'id_emisor');
    }
    public function receptor()
    {
        return $this->belongsTo(User::class, 'id_receptor');
    }

}
