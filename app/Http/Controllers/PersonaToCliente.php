<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\ClientesAsociado;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaToCliente extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('LayoutsPrincipal.PersonaToCliente.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('LayoutsPrincipal.PersonaToCliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientesAsociado $clientesAsociado)
    {
        return view('LayoutsPrincipal.PersonaToCliente.edit',[
            'clienteAsociado' => $clientesAsociado
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
