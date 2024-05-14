<?php

namespace App\Livewire;

use App\Models\Cliente;
use App\Models\Mascota;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MostrarMascotas extends Component
{
    public function eliminarMascota($id){
        $mascota = Mascota::find($id);
        $mascota->delete();
    }

    public function render()
    {
        $datos = Mascota::Join('clientes as C','C.id','=','mascotas.cliente_id')
                            ->join('especies as E','E.id','=','mascotas.especie_id')
                            ->select('mascotas.id','mascotas.name','C.lastname','E.especie as tipo','mascotas.raza',
                                    'mascotas.color_pelo','mascotas.fecha_nacimiento','mascotas.peso_promedio',
                                    'mascotas.peso_actual')->get();

        return view(
            'livewire.Mascotas.mostrar-mascotas',
            [
                'datos' => $datos
            ]
        );
    }
}
