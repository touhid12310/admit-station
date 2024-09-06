<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicationHistoryResource\Pages;
use App\Filament\Resources\ApplicationHistoryResource\RelationManagers;
use App\Models\ApplicationHistory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApplicationHistoryResource extends Resource
{
    protected static ?string $clusterBreadcrumb = 'cluster';
    protected static ?string $model = ApplicationHistory::class;
    protected static ?string $navigationLabel = 'Application';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

   
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    Stack::make([
                        ImageColumn::make('user.photo')
                        ->circular(),
                        TextColumn::make('user.name')
                            ->weight(FontWeight::Bold)
                            ->searchable()
                            ->sortable(),
                        TextColumn::make('user.email'),
                    ]),
                    Stack::make([
                        ImageColumn::make('institute.thumb_img'),
                        TextColumn::make('institute.name')
                        ->weight(FontWeight::Bold)
                        ->searchable(),
                        TextColumn::make('institute.email')
                        ->label('Institute Name')
                        ->searchable(),
                    
                    ]),
                    Stack::make([
                        TextColumn::make('status')
                            ->searchable()
                            ->label('Status')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'Pending' => 'info',
                                'Approved' => 'success',
                                'Cancel' => 'danger',
                            }),
                    ]),
                    Stack::make([
                        SelectColumn::make('status')
                            ->options([
                                'Pending' => 'Pending',
                                'Approved' => 'Approved',
                                'Cancel' => 'Cancel',
                            ]),
                    ]),
                ])
            ])->defaultSort('created_at', 'desc')
           
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
                //
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
        ];
    }
}
