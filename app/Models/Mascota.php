<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cliente_id',
        'especie_id',
        'raza',
        'color_pelo',
        'fecha_nacimiento',
        'peso_promedio',
        'peso_actual',
        'historial_medico_id',
        'calendario_vacunacion_id'
    ];

    //? hasMany: 1 - N / Va a tener muchas especies
    public function especies() {
        return $this->hasMany(Especie::class);
    }

    public function clientes() {
        return $this->hasMany(Cliente::class);
    }

    public function historial_medicos() {
        return $this->hasOne(HistorialMedico::class);
    }

    public function calendario_vacunacions() {
        return $this->hasOne(CalendarioVacunacion::class);
    }
}
