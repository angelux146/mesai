<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Menu;
use App\Models\Reservacion;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
  // Mostrar menú
  public function menu()
  {
    $menus = Menu::where('disponible', true)->get();

    return view('clientes.menu', compact('menus'));
  }

  // Vista reservación
  public function reservacion()
  {
    return view('clientes.reservacion');
  }

  // Guardar reservación
  public function guardarReservacion(Request $request)
  {
    $request->validate([
      'nombre' => 'required',
      'telefono' => 'required',
      'email' => 'required|email',

      'fecha' => 'required',
      'hora' => 'required',

      'personas' => 'required',
      'mesa' => 'required',
    ]);

    // Crear cliente
    $cliente = Cliente::create([
      'nombre' => $request->nombre,
      'telefono' => $request->telefono,
      'email' => $request->email,
      'notas' => $request->notas,
    ]);

    // Crear reservación
    Reservacion::create([
      'cliente_id' => $cliente->id,
      'fecha' => $request->fecha,
      'hora' => $request->hora,
      'personas' => $request->personas,
      'mesa' => $request->mesa,
      'estado' => 'pendiente',
    ]);

    return back()->with(
      'success',
      'Reservación realizada correctamente'
    );
  }
}
