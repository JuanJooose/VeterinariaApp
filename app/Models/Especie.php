<?php

namespace App\Models;

use App\Models\Mascota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Especie extends Model
{
    use HasFactory;

    //?  Relacion N - 1
    public function mascota() {

        return $this->belongsTo(Mascota::class);
    }
}
