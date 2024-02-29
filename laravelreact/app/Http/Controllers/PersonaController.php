<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use App\Http\Requests\RequestPersona;

class PersonaController extends Controller
{
   
    public function index() {

        $persona = Persona::all();

        return response()->json([
            "mensaje" => 'hola desde la api para listar usuarios',
            'personas' => $persona
        ]);
    }

  
    public function create()
    {
        //
    }

    public function store(RequestPersona $request) {
        Persona::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' =>$request->password
        ]);

        return response()->json([
            'mensaje' => 'persona creada',

        ],200);
    }

    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
