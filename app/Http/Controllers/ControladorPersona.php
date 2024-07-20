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