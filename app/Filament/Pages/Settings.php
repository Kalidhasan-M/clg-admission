<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class Settings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?int $navigationSort = 5;

    protected static string $settings = GeneralSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Social Media Links')
                ->description('Manage your social media links')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('fb')
                                ->label('Facebook')
                                ->placeholder('Enter Facebook URL')
                                ->required(),                            
                            TextInput::make('insta')
                                ->label('Instagram')
                                ->placeholder('Enter Instagram URL')
                                ->required(),
                            TextInput::make('ytube')
                                ->label('YouTube')
                                ->placeholder('Enter YouTube URL')
                                ->required(),
                            TextInput::make('twitter')
                                ->label('Twitter')
                                ->placeholder('Enter Twitter URL')
                                ->required(),
                        ]),
                ])->collapsed(),
                Section::make('College Information')
                ->description('Manage college details')
                ->schema([
                    TextInput::make('location')
                        ->label('College Address')
                        ->placeholder('Enter college address')
                        ->columnSpanFull()
                        ->required(),
                ])->collapsed(),
            ]);
    }
}
