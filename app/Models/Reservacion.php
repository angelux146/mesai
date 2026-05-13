<?php

namespace App\Models;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    //
        use HasFactory;

    protected $fillable = [
        'cliente_id',
        'fecha',
        'hora',
        'personas',
        'mesa',
        'estado',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
