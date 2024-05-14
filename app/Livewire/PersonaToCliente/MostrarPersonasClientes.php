<?php

namespace App\Livewire\PersonaToCliente;

use Livewire\Component;
use App\Models\ClientesAsociado;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PersonaToCliente;

class MostrarPersonasClientes extends Component
{
    public function eliminarPersonaAsociado($id) {
        $cliente = ClientesAsociado::find($id);
        $cliente->delete();
    }

    public function render()
    {
        $datos = ClientesAsociado::join('clientes as C','C.id','=','clientes_asociados.cliente_id')
                                ->join('personas as P','P.id','=','clientes_asociados.persona_id')
                                ->select(DB::raw("concat(P.firstname,' ',P.lastname) as name"),
                                                'C.lastname as cLastname','P.document','P.phone','clientes_asociados.id')
                                ->get();

        return view('livewire.persona-to-cliente.mostrar-personas-clientes',[
            'datos' => $datos
        ]);
    }
}
