<?php

namespace App\Filament\Resources\InstituteResource\Widgets;

use App\Models\Institute;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class InstituteOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Apply Institute', Institute::query()->where('app_status', 'Pending')->count()),
            Stat::make('Register Institute', Institute::query()->where('app_status', 'Approved')->count()),
            Stat::make('Cancel Institute', Institute::query()->where('app_status', 'Cancel')->count()),
        ];
    }
}
