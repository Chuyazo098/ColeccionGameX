<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progreso extends Model
{
    use HasFactory;

    protected $table = 'progresos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'coleccions_id',  
        'porcentajecompleto',
        'horasjugadas',
        'logrosdesbloqueados',
        // Otros campos de tu tabla 'progresos'
    ];
    
    public function coleccion()
    {
        return $this->belongsTo(colecciones::class, 'colecciones_id');
    }
}    