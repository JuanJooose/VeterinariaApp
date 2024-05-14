<?php

namespace App\Livewire;

use App\Models\Cliente;
use App\Models\Especie;
use App\Models\Mascota;
use Livewire\Component;

class EditarMascota extends Component
{
    public $mascota_id;
    public $name;
    public $cliente_id;
    public $especie_id;
    public $raza;
    public $color_pelo;
    public $fecha_nacimiento;
    public $peso_promedio;
    public $peso_actual;


    protected $rules = [
        'name' => 'required|string|max:40',
        'cliente_id' => 'required|between:1,5',
        'especie_id' => 'required|between:1,2',
        'raza' => 'required|string|max:40',
        'color_pelo' => 'required|string|max:40',
        'fecha_nacimiento' => 'required|string|max:40',
        'peso_promedio' => 'required|string|max:40',
        'peso_actual' => 'required|string|max:40'
    ];

    public function mount(Mascota $mascota) {
        $this->mascota_id = $mascota->id;
        $this->name = $mascota->name;
        $this->cliente_id = $mascota->cliente_id;
        $this->especie_id = $mascota->especie_id;
        $this->raza = $mascota->raza ;
        $this->color_pelo = $mascota->color_pelo;
        $this->fecha_nacimiento = $mascota->fecha_nacimiento;
        $this->peso_promedio = $mascota->peso_promedio;
        $this->peso_actual = $mascota->peso_actual;
    }


    public function editarMascota() {

        $datos = $this->validate();


        $mascota = Mascota::find($this->mascota_id);

        //? Reasignar los valores
        $mascota->name = $datos['name'];
        $mascota->cliente_id = $datos['cliente_id'];
        $mascota->especie_id = $datos['especie_id'];
        $mascota->raza = $datos['raza'];
        $mascota->color_pelo = $datos['color_pelo'];
        $mascota->fecha_nacimiento = $datos['fecha_nacimiento'];
        $mascota->peso_promedio = $datos['peso_promedio'];
        $mascota->peso_actual = $datos['peso_actual'];


        //? Guardar los cambios
        $mascota->save();


        //? redireccionar
        return redirect()->route('LayoutsPrincipal.Mascotas.index');
    }

    public function render()
    {
        $clientes = Cliente::all();
        $especies = Especie::all();

        return view('livewire.Mascotas.editar-mascota', [
            'especies'=>$especies,
            'clientes'=>$clientes
        ]);
    }
}
