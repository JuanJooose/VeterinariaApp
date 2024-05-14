<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{


    //Display a listing of the resource.*/
    public function index()
    {
        return view('LayoutsPrincipal.Mascotas.index');
    }



    //Show the form for creating a new resource.*/
    public function create()
    {
        return view('LayoutsPrincipal.Mascotas.create');
    }


    public function edit(Mascota $mascota)
    {
        return view('LayoutsPrincipal.Mascotas.edit', [
            'mascota' => $mascota
        ]);
    }


    public function destroy(string $id)
    {
        //
    }
}
