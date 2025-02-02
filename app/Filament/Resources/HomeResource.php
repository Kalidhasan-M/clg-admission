<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Filament\Resources\HomeResource\RelationManagers;
use App\Models\Home;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $navigationLabel = 'Home';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('General Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Title'),
                        Forms\Components\FileUpload::make('banner_image')
                            ->label('Banner Image')
                            ->image()
                            ->multiple()
                            ->directory('home_images'),
                    ])->columns(2)
                    ->collapsible()
                    ->collapsed(),                        
                Forms\Components\Section::make('Programs Offered')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('images'),
                        Forms\Components\Textarea::make('program_description')
                            ->label('Program Description')                            
                    ])->columns(2)
                    ->collapsible()
                    ->collapsed(),
                Forms\Components\Section::make('Testimonials')
                    ->schema([
                        Forms\Components\TextInput::make('student_name')
                            ->label('Title'),
                        Forms\Components\Textarea::make('testimonial')
                            ->label('Information'),
                    ])->columns(2)
                    ->collapsed(),
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('student_name'),
                Tables\Columns\TextColumn::make('testimonial')->wrap(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomes::route('/'),
            'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
        ];
    }
}