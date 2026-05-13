<?php

namespace App\Filament\Resources\Reservacions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;

class ReservacionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                    
                \Filament\Tables\Columns\TextColumn::make('cliente.nombre')
                    ->label('Cliente')
                    ->searchable()
                    ->sortable(),
                    
                \Filament\Tables\Columns\TextColumn::make('fecha')
                    ->date('d/m/Y')
                    ->sortable(),
                    
                \Filament\Tables\Columns\TextColumn::make('hora')
                    ->time('H:i')
                    ->sortable(),
                    
                \Filament\Tables\Columns\TextColumn::make('personas')
                    ->sortable()
                    ->alignCenter(),
                    
                \Filament\Tables\Columns\TextColumn::make('mesa')
                    ->searchable(),
                    
                \Filament\Tables\Columns\TextColumn::make('estado')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Pendiente' => 'warning',
                        'Confirmada' => 'success',
                        'Cancelada' => 'danger',
                        'Completada' => 'info',
                        default => 'gray',
                    }),
                    
                \Filament\Tables\Columns\TextColumn::make('created_at')
                    ->label('Registrada')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('fecha', 'desc')
            ->searchable(['cliente.nombre', 'mesa', 'estado']);
    }
}
