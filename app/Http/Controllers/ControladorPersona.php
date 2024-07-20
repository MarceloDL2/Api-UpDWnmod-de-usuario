public function baja(Persona $persona)
{
    $persona->delete();
    return response()->json(null, 204);
}