<?php

namespace App\Filament\Resources\ApplicationHistoryResource\Widgets;

use App\Models\ApplicationHistory;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ApplyOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pending', ApplicationHistory::query()->where('status', 'Pending')->count()),
            Stat::make('Approved', ApplicationHistory::query()->where('status', 'Approved')->count()),
            Stat::make('Cancel', ApplicationHistory::query()->where('status', 'Cancel')->count()),
        ];
    }
}
