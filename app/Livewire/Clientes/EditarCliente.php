<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditarCliente extends Component
{

    public $cliente_id;
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


    public function mount(Cliente $cliente) {
        $this->cliente_id = $cliente->id;
        $this->lastname = $cliente->lastname;
        $this->bankAccount = $cliente->bankAccount;
        $this->address = $cliente->address;
        $this->phone = $cliente->phone;
    }


    public function editarCliente() {

        $datos = $this->Validate();

        $cliente = Cliente::find($this->cliente_id);

        $cliente->lastname = $datos['lastname'];
        $cliente->bankAccount = $datos['bankAccount'];
        $cliente->address = $datos['address'];
        $cliente->phone= $datos['phone'];

        $cliente->save();

        redirect()->route('LayoutsPrincipal.Clientes.index');
    }

    public function render()
    {
        return view('livewire.clientes.editar-cliente');
    }
}
