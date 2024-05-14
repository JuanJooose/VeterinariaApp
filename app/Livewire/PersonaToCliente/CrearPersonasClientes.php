<?php

namespace App\Livewire\PersonaToCliente;

use App\Models\Cliente;
use App\Models\Persona;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\elementType;
use App\Http\Controllers\PersonaToCliente;

class CrearPersonasClientes extends Component
{
    public $clientes;
    public $personas;
    public $cliente_id;
    public $persona_id;
    public $personName;


    //? para mañana utilizar la function mount y llamar todas la variables para que las vaya tomando
    public function mount() {
        $this->clientes = Cliente::all();
         $this->personas = collect();
        // ->select(DB::raw("concat(personas.firstname,' ',personas.lastname) as name"), 'personas.id')->where('personas.id', '!=', '1')


    }

    public function updatepersonName($personName)
    {
        $this->personas = Persona::select(DB::raw("concat(personas.firstname,' ',personas.lastname) as name"), 'personas.id')->get();
    }

    // public function updating($property,$value) {

    //     if ($property == 'personName') {
    //         $this->personName = "si funciona";
    //     }
    //     $this->personas = Persona::join('clientes_asociados AS ca', 'ca.persona_id', '=', 'personas.id')
    //     ->where('ca.persona_id', '=', $value)
    //     ->get();

    // }

    //? create
    public function agregarAsociacion()
    {

    }

    public function render()
    {
        return view('livewire.persona-to-cliente.crear-personas-clientes');
    }


}
