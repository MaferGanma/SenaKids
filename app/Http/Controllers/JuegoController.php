<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function guardarPuntaje(Request $request)
{
    // Validar los datos
    $request->validate([
        'nombre_usuario' => 'required|string',
        'calificacion' => 'required|integer',
    ]);

    // Guardar en la base de datos
    Nota::create([
        'nombre_usuario' => $request->nombre_usuario,
        'calificacion' => $request->calificacion,
        'fecha' => now(),
    ]);

    return response()->json(['message' => 'Puntaje guardado correctamente']);
}
}
