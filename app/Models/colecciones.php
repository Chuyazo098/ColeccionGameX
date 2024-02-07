<?php

// En el modelo Coleccion.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colecciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'juego_id',
        'calificacion',
        'comentario',
        'fechaadquisicion',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

// Modelo Coleccion
public function juegos()
{
    return $this->hasMany(Juegos::class, 'juegos_id');
}



    // Agrega esta relación para obtener los progresos asociados a la colección
    public function progresos()
    {
        return $this->hasMany(Progreso::class, 'colecciones_id');
    }
}
