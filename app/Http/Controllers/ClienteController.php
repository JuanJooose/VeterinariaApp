<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('LayoutsPrincipal.Clientes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('LayoutsPrincipal.Clientes.create');
    }


    public function edit(Cliente $cliente)
    {
        return view(
            'LayoutsPrincipal.Clientes.edit',
            ['cliente' => $cliente]
        );
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
