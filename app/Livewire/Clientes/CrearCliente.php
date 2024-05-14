<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class CrearCliente extends Component
{
    public $lastname;
    public $bankAccount;
    public $address;
    public $phone;


    protected $rules = [
        'lastname' => 'required|string|max:40',
        'bankAccount' => 'required|max:15',
        'address' => 'required',
        'phone' => 'required|max:20'
    ];

    public function crearCliente() {

        $datos = $this->validate();

        Cliente::create([
            'lastname' => $datos['lastname'],
            'bankAccount' => intval($datos['bankAccount']),
            'address' => $datos['address'],
            'phone' => intval($datos['phone'])
        ]);


        //? Crear un mensaje

        session()->flash('message','El cliente se ha creado exitosamente');


        redirect()->route('LayoutsPrincipal.Clientes.index');
    }

    public function render()
    {
        return view('livewire.clientes.crear-cliente');
    }
}
