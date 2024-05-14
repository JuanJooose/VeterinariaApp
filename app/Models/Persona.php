<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'document',
        'phone'
    ];

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class,'cliente_asociados');
    }
}
