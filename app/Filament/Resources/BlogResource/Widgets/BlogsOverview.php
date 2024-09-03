<?php

namespace App\Filament\Resources\BlogResource\Widgets;

use App\Models\Blog;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BlogsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pending', Blog::query()->where('status', 'Pending')->count()),
            Stat::make('Approved', Blog::query()->where('status', 'Approved')->count()),
            Stat::make('Cancel', Blog::query()->where('status', 'Cancel')->count()),
        ];
    }
}
