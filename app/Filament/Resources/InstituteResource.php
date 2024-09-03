<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstituteResource\Pages;
use App\Filament\Resources\InstituteResource\RelationManagers;
use App\Models\Institute;
use DateTime;
use Illuminate\Support\Str;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InstituteResource extends Resource
{
    protected static ?string $model = Institute::class;

    protected static ?string $recordTitleAttribute = 'name';
    
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Info')->schema([
                        
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->columnSpanFull()
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->disabled()
                            ->columnSpanFull()
                            ->dehydrated()
                            ->unique(Institute::class, 'slug', ignoreRecord: true),
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        TextInput::make('EIIN')
                            ->required()
                            ->label('EIIN Number')
                            ->maxLength(255),
                        
                        
                        TextInput::make('country_code')
                            ->maxLength(255)
                            ->default(null),

                        TextInput::make('mobile_no')
                            ->required()
                            ->maxLength(255),

                        DatePicker::make('E_year')
                            ->format('d/m/Y')
                            ->required(),

                        TextInput::make('country')
                            ->required()
                            ->maxLength(255),
        
                        TextInput::make('city')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('address')
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(255),

                        MarkdownEditor::make('description')
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory('Institute'),  
                    ])->columns(2),
                    
                ])->columnSpan(2),

                Group::make()->schema([
                    Section::make('Images')->schema([ 
                        FileUpload::make('logo')
                            ->disk('real_public')
                            ->directory('Institute'),

                        FileUpload::make('thumb_img')
                            ->label('Institute Image')
                            ->disk('real_public')
                            ->directory('Institute'),
                    ])->columns(1),
                    Section::make('Status')->schema([ 
                        Select::make('institute_type')
                            ->options([
                                'School' => 'School',
                                'College' => 'College',
                                'University' => 'University',
                            ])
                            ->preload()
                            ->required(),

                        Select::make('app_status')
                            ->options([
                                'Pending' => 'Pending',
                                'Approved' => 'Approved',
                                'Cancel' => 'Cancel',
                            ])
                            ->default('Pending')
                            ->preload(),
                    ])->columns(1),
                ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('institute_type')
                    ->searchable()
                    ->label('Institute Type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'School' => 'success',
                        'College' => 'success',
                        'University' => 'success',
                    }),
                Tables\Columns\SelectColumn::make('app_status')
                    ->options([
                        'Pending' => 'Pending',
                        'Approved' => 'Approved',
                        'Cancel' => 'Cancel',
                    ])->toggleable(isToggledHiddenByDefault: true),
               
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])->defaultSort('id', 'desc')
            
            ->filters([
                SelectFilter::make('app_status')->options([
                    'Pending' => 'Pending',
                    'Approved' => 'Approved',
                    'Cancel' => 'Cancel',
                ]),
                Tables\Filters\TrashedFilter::make(),
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
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListInstitutes::route('/'),
            'create' => Pages\CreateInstitute::route('/create'),
            'edit' => Pages\EditInstitute::route('/{record}/edit'),
        ];
    }
}
