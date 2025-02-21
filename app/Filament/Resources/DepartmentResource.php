<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartmentResource\Pages;
use App\Filament\Resources\DepartmentResource\RelationManagers\DeptRelationManager;
use App\Models\Department;
use App\Models\Program;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DepartmentResource extends Resource
{
    protected static ?string $model = Department::class;

    protected static ?string $navigationLabel = 'Department';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Department Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Department')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('department')
                            ->label('Department Name')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2)
                    ->collapsed(),

                Forms\Components\Section::make('Department Details')
                    ->schema([
                        Forms\Components\TextInput::make('description')
                            ->label('Description'),
                        Forms\Components\FileUpload::make('image')
                            ->label('Image')
                            ->image()
                        ,
                    ])->columns(2)
                    ->collapsed(),

                Forms\Components\Section::make('Faculty Members')
                    ->schema([
                        Forms\Components\Repeater::make('faculties')
                            ->label('Faculties')
                            ->schema([
                                Forms\Components\TextInput::make('faculty_name')
                                    ->label('Faculty Name')
                                    ->required(),
                                Forms\Components\TextInput::make('faculty_email')
                                    ->label('Faculty Email')
                                    ->email()
                                    ->required(),
                            ])->columns(2)
                            ->collapsed()
                            ->cloneable()
                            ->itemLabel(fn(array $state): ?string => 'Faculty name : ' . ($state['faculty_name'] ?? ''))
                            ->reorderableWithDragAndDrop(false),
                    ])
                    ->collapsed(),

                Forms\Components\Section::make('Programs Offered')
                    ->schema([
                        Forms\Components\Repeater::make('programs')
                            ->label('Programs')
                            ->schema([
                                Forms\Components\TextInput::make('program_name')
                                    ->label('Program Name')
                                    ->required(),
                                Forms\Components\TextInput::make('program_duration')
                                    ->label('Duration')
                                    ->required(),
                            ])->columns(2)
                            ->collapsed()
                            ->cloneable()
                            ->itemLabel(fn(array $state): ?string => 'Program: ' . ($state['program_name'] ?? ''))
                            ->reorderableWithDragAndDrop(false),
                    ])
                    ->collapsed(),
            ])
            ->columns(1);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('department')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Description'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            DeptRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDepartments::route('/'),
            'create' => Pages\CreateDepartment::route('/create'),
            'edit' => Pages\EditDepartment::route('/{record}/edit'),
        ];
    }
}
