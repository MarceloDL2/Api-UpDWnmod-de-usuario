public function alta(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'id' => 'required',
    ]);

    return Persona::create($request->all());
}

public function baja(Persona $persona)
{
    $persona->delete();
    return response()->json(null, 204);
}