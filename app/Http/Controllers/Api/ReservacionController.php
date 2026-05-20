<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reservacion;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{
    //
    public function index()
    {
        return Reservacion::all();
    }
}
