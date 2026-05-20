<?php

namespace App\Filament\Resources\Menus\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('nombre')
                ->required()
                ->maxLength(255),

            Textarea::make('descripcion')
                ->nullable(),

            TextInput::make('precio')
                ->numeric()
                ->required(),

            TextInput::make('categoria')
                ->nullable(),

            Toggle::make('disponible')
                ->default(true),
        ]);
    }
}