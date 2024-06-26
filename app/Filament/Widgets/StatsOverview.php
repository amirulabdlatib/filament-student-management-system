<?php

namespace App\Filament\Widgets;

use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //
            Stat::make('Total Student', Student::count()),
            Stat::make('Total Classes', Classes::count()),
            Stat::make('Total Section', Section::count()),
        ];
    }
}