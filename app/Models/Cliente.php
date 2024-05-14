<?php

namespace App\Models;

use App\Models\Mascota;
use App\Models\ClientesAsociado;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;


    protected $fillable = [
        'lastname',
        'bankAccount',
        'address',
        'phone'
    ];

    // public function clientes_asociados() {
    //     return $this->hasMany(ClientesAsociado::class);
    // }

    public function personas(){
        return $this->belongsToMany(Cliente::class,'cliente_asociados');
    }

    public function mascotas() {
        return $this->belongsTo(Mascota::class);
    }
}
