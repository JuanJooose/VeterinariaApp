<?php

namespace App\Livewire;

use App\Models\Cliente;
use App\Models\Especie;
use App\Models\Mascota;
use Livewire\Component;
use App\Models\HistorialMedico;
use Illuminate\Support\Facades\DB;
use App\Models\CalendarioVacunacion;

class CrearMascota extends Component
{

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


    public function crearMascota() {

        //? validar con el objeto $rules
        $datos = $this->validate();



        //? Crear calendario de vacunación

         CalendarioVacunacion::create();
         HistorialMedico::create();


        // //? Traer los últimos id´s de las tablas Calendario Vacunación e Historial Médico.

        $historialMedico = DB::table('historial_medicos')->get()->last();
        $calendarioVacunaciones = DB::table('calendario_vacunacions')->get()->last();

        // //? Crear Mascota
        Mascota::create([
            'name' => $datos['name'],
            'cliente_id' => $datos['cliente_id'],
            'especie_id' => $datos['especie_id'],
            'raza' => $datos['raza'],
            'color_pelo' => $datos['color_pelo'],
            'fecha_nacimiento' => $datos['fecha_nacimiento'],
            'peso_promedio' => $datos['peso_promedio'],
            'peso_actual' => $datos['peso_actual'],
            'historial_medico_id' => $historialMedico->id,
            'calendario_vacunacion_id' => $calendarioVacunaciones->id
        ]);

        session()->flash('message','La mascota se ha creado exitosamente');


        return redirect()->route('LayoutsPrincipal.Mascotas.index');
    }



    public function render()
    {
        //? Consultar a la base de datos.

        $clientes = Cliente::all();
        $especies = Especie::all();

        return view('livewire.Mascotas.crear-mascota',[
                'especies'=>$especies,
                'clientes'=>$clientes
            ]);
    }


}
