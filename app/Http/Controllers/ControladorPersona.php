public function alta(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'id' => 'required',

    ]);
}

    return Persona::create($request->all());

public function baja(Persona $persona)
{
    $persona->delete();
    return response()->json(null, 204);
}


public function Modificar(Request $request, Persona $persona)
{
    $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'id' => 'required',
    ]);

    $persona->update($request->all());
    return $persona;
}

public function buscar(Request $request)
{
    $query = Persona::query();

    if ($request->has('nombre')) {
        $query->where('nombre', 'like', '%' . $request->nombre . '%');
    }

    if ($request->has('apellido')) {
        $query->where('apellido', 'like', '%' . $request->apellido . '%');
    }

    if ($request->has('id')) {
        $query->where('id', 'like', '%' . $request->id . '%');
    }
    return $query->get();
}




