<?php

namespace App\Filament\Resources\Clientes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;

class ClientesTable
{
    public static function configure(Table $table): Table
    {
return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('id')->sortable(),
                \Filament\Tables\Columns\TextColumn::make('nombre')->searchable()->sortable(),
                \Filament\Tables\Columns\TextColumn::make('telefono')->searchable(),
                \Filament\Tables\Columns\TextColumn::make('email')->searchable()->copyable(),
                \Filament\Tables\Columns\TextColumn::make('notas')->limit(50),
                \Filament\Tables\Columns\TextColumn::make('created_at')->dateTime('d/m/Y H:i')->sortable(),
            ])
            ->defaultSort('id', 'desc');
    }
}
