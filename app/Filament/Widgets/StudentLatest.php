<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use App\Models\Student;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class StudentLatest extends BaseWidget
{

    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Student::query()
                    ->latest()
                    ->limit(5)
            )
            ->columns([
                // ...
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('class.name')
                    ->numeric()
                    ->sortable()
                    ->badge(),
                Tables\Columns\TextColumn::make('section.name')
                    ->numeric()
                    ->sortable()
                    ->badge(),
            ]);
    }
}