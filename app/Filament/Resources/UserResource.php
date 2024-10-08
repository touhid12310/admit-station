<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Support\Enums\ActionSize;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationGroup = 'Settings';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function canCreate(): bool
    {
        return true;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Select::make('user_type')
                                    ->options([
                                        'student' => 'Student',
                                        'institute' => 'Institute',
                                    ])
                                    ->required()
                                    ->live(),

                                Select::make('institute_type')
                                    ->options([
                                        'university' => 'University',
                                        'college' => 'College',
                                        'school' => 'School',
                                    ])->required()->visible(fn(Get $get): bool => $get('user_type') === 'institute'),
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('email')
                                    ->email()
                                    ->required(),
                                TextInput::make('phone_no')
                                    ->tel(),
                                TextInput::make('occupation'),
                                TextInput::make('bio'),
                            ])->columns(2),
                    ]),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Image Upload Section')
                            ->schema([
                                FileUpload::make('photo')
                                    ->image()
                                    ->disk('real_public')
                                    ->directory('uploads/Users'),
                                FileUpload::make('cover_photo')
                                    ->image()
                                    ->disk('real_public')
                                    ->directory('uploads/Users'),
                            ])->collapsible(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('id')
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Avatar')
                    ->circular(),
                Tables\Columns\TextColumn::make('user_type')
                    ->formatStateUsing(fn(string $state): string => ucwords($state))
                    ->searchable()
                    ->label('User Type'),
                Tables\Columns\TextColumn::make('institute_type')->formatStateUsing(fn(string $state): string => ucwords($state))
                    ->placeholder('N/A')
                    ->label('Institute Type'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_no')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
                    ->icon('heroicon-m-adjustments-horizontal')
                    ->size(ActionSize::Small)
                    ->color('primary')
                    ->button()
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
