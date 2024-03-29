<?php

    namespace App\Http\Controllers;

    use App\Models\Persona;
    use App\Http\Requests\RequestPersona;
    use App\Http\Requests\UpdatePersonaRequest;

    class PersonaController extends Controller
    {
        public function index()
        {
            $persona = Persona::all();

            return response()->json(["mensaje" => 'hola desde la api para listar usuarios', 'personas' => $persona]);
        }



        public function store(RequestPersona $request)
        {
            Persona::create(['nombre' => $request->nombre, 
            'email' => $request->email,
             'password' => $request->password
            ]);

      /*       $sql = "insert into personas () values()"; */

            return response()->json([
                'mensaje' => 'persona creada'
            ], 200);
        }

        public function show($id) {
            $persona = Persona::find($id);

            return response()->json([
                'mensaje' => 'se encontro la persona',
                'user' => $persona
            ]);
        }



        public function update(UpdatePersonaRequest $request, $id) {
            $persona = Persona::find($id);

            $persona->update($request->all());

            return response()->json([
                'mensage' => 'persona actualizada',
                'persona' => $persona
            ]);
        }

        public function destroy( $persona)
        {
            $user = Persona::find($persona);
            $user->delete();

            return response()->json([
               "mensage" => "se elimino la persona"
            ]);
        }
    }
