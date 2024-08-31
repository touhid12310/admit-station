<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicationHistoryResource\Pages;
use App\Filament\Resources\ApplicationHistoryResource\RelationManagers;
use App\Models\ApplicationHistory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApplicationHistoryResource extends Resource
{
    protected static ?string $model = ApplicationHistory::class;
    protected static ?string $navigationLabel = 'Application';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('institute.name')
                    ->label('Institute Name')
                    ->searchable(),
                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'Approved' => 'Approved',
                        'Cancel' => 'Cancel',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')->options([
                    'Pending' => 'Pending',
                    'Approved' => 'Approved',
                    'Cancel' => 'Cancel',
                ]),
            ])
            ->actions([
                //
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListApplicationHistories::route('/'),
            'create' => Pages\CreateApplicationHistory::route('/create'),
            'edit' => Pages\EditApplicationHistory::route('/{record}/edit'),
        ];
    }
}
