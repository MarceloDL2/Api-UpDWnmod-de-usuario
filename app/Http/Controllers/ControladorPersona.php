public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
    ]);

    return Persona::create($request->all());
}