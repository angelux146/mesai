<?php

namespace App\Models;

use App\Models\Reservacion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
        use HasFactory;

    protected $fillable = [
        'nombre',
        'telefono',
        'email',
        'notas',
    ];

    public function reservaciones()
{
    return $this->hasMany(Reservacion::class);
}
}
