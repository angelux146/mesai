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

<<<<<<< HEAD
  
=======
  // Vista reservación
>>>>>>> 9a8d5cfcfafed7fe9ca1b1a4e4c5a57468444a28
  public function reservacion()
  {
    return view('clientes.reservacion');
  }

<<<<<<< HEAD
  
=======
  // Guardar reservación
>>>>>>> 9a8d5cfcfafed7fe9ca1b1a4e4c5a57468444a28
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

<<<<<<< HEAD
    
=======
    // Crear cliente
>>>>>>> 9a8d5cfcfafed7fe9ca1b1a4e4c5a57468444a28
    $cliente = Cliente::create([
      'nombre' => $request->nombre,
      'telefono' => $request->telefono,
      'email' => $request->email,
      'notas' => $request->notas,
    ]);

<<<<<<< HEAD
    
=======
    // Crear reservación
>>>>>>> 9a8d5cfcfafed7fe9ca1b1a4e4c5a57468444a28
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
