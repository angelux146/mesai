<?php

namespace App\Filament\Resources\Reservacions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;
use App\Models\Cliente;

class ReservacionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([

            Select::make('cliente_id')
                ->label('Cliente')
                ->options(
                    Cliente::all()->pluck('nombre', 'id')
                )
                ->searchable()
                ->required(),

            DatePicker::make('fecha')
                ->required(),

            TimePicker::make('hora')
                ->required(),

            TextInput::make('personas')
                ->numeric()
                ->required(),

            TextInput::make('mesa')
                ->required(),

            Select::make('estado')
                ->options([
                    'pendiente' => 'Pendiente',
                    'confirmada' => 'Confirmada',
                    'cancelada' => 'Cancelada',
                ])
                ->default('pendiente')
                ->required(),
        ]);
    }
}