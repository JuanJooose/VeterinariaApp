<?php

namespace App\Models;

use App\Models\Mascota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistorialMedico extends Model
{
    use HasFactory;


    public function mascotas()
    {
        return $this->belongsTo(Mascota::class);
    }
}
