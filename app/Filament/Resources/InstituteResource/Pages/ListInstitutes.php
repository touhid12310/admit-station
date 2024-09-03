<?php

namespace App\Filament\Resources\InstituteResource\Pages;

use App\Filament\Resources\InstituteResource;
use App\Filament\Resources\InstituteResource\Widgets\InstituteOverview;
use Filament\Actions;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Resources\Pages\ListRecords;

class ListInstitutes extends ListRecords
{
    protected static string $resource = InstituteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Add Institute'),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            InstituteOverview::class
        ];
    }

}
