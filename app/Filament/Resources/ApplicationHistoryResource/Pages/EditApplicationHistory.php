<?php

namespace App\Filament\Resources\ApplicationHistoryResource\Pages;

use App\Filament\Resources\ApplicationHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApplicationHistory extends EditRecord
{
    protected static string $resource = ApplicationHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
