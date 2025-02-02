<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationLabel = 'About';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Grid::make(2)
            ->schema([
            Forms\Components\TextInput::make('title')->label('Title')
                    ->required()
                    ->maxLength(255),
            Forms\Components\FileUpload::make('image')
                ->label('Image')
                ->directory('sliders'),
            ]),
            Forms\Components\Repeater::make('text')
                ->schema([
                    Forms\Components\TextInput::make('sub_heading')->label('Sub Heading'),
                    Forms\Components\RichEditor::make('text')->label('Description'),
                ])
                ->collapsed()
                ->itemLabel(fn(array $state): ?string => 'Sub heading : ' . $state['sub_heading'])
                ->required()
                ->cloneable()
                ->reorderableWithDragAndDrop(false)
                ->columnSpanFull()
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->label('Title')->wrap(),
            Tables\Columns\ImageColumn::make('image')->label('Image'),
            Tables\Columns\TextColumn::make('text')->label('Text')->html()->wrap()
            ->getStateUsing(function (About $record) {
                if (is_array($record->text)) {
                    return collect($record->text)
                        ->map(fn($item) => ($item['sub_heading'] ?? '') . ': ' . ($item['text'] ?? ''))
                        ->join('<br>');
                }
            }),
        ])
        ->filters([

        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make()
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
