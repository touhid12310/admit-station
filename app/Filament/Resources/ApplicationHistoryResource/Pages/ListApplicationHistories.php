<?php

namespace App\Filament\Resources\ApplicationHistoryResource\Pages;

use App\Filament\Resources\ApplicationHistoryResource;
use App\Filament\Resources\ApplicationHistoryResource\Widgets\ApplyOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApplicationHistories extends ListRecords
{
    protected static string $resource = ApplicationHistoryResource::class;
    
    protected static ?string $title = 'Application List';
    protected function getHeaderActions(): array
    {
        return [
           //
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            ApplyOverview::class
        ];
    }
}
