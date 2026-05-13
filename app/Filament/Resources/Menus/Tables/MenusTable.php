<?php

namespace App\Filament\Resources\Menus\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;

class MenusTable
{
    public static function configure(Table $table): Table
    {
return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('id')->sortable(),
                \Filament\Tables\Columns\TextColumn::make('nombre')->searchable()->sortable(),
                \Filament\Tables\Columns\TextColumn::make('descripcion')->limit(50),
                \Filament\Tables\Columns\TextColumn::make('precio')->money('MXN')->sortable(),
                \Filament\Tables\Columns\TextColumn::make('categoria')->badge(),
                \Filament\Tables\Columns\IconColumn::make('disponible')->boolean(),
                \Filament\Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->defaultSort('id', 'desc');
    }
}
