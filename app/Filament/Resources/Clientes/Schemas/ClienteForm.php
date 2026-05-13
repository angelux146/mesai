<?php

namespace App\Filament\Resources\Clientes\Schemas;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ClienteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('nombre')
                ->required(),

            TextInput::make('telefono'),

            TextInput::make('email')
                ->email(),

            Textarea::make('notas'),
        ]);
    }
}
