<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class MostrarCliente extends Component
{

    public function eliminarCliente($id){
        $mascota = Cliente::find($id);
        $mascota->delete();
    }

    public function render()
    {
        $datos = Cliente::all();
        return view(
            'livewire.clientes.mostrar-cliente',
            [
                'datos' => $datos
            ]
        );
    }
}
