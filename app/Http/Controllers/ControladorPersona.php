public function destroy(Persona $persona)
{
    $persona->delete();
    return response()->json(null, 204);
}