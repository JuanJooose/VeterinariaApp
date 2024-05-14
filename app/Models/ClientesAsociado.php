<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesAsociado extends Model
{
    use HasFactory;

    protected $fillable = [
        'persona_id',
        'cliente_id'
    ];

    // public function personas() {
    //     return $this->belongsTo(Persona::class);
    // }

    // public function clientes() {
    //     return $this->belongsTo(Cliente::class);
    // }
}
