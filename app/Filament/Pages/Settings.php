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
                                ->url()
                                ->columnSpan(1),
                            TextInput::make('insta')
                                ->label('Instagram')
                                ->placeholder('Enter Instagram URL')
                                ->url()
                                ->columnSpan(1),
                            TextInput::make('ytube')
                                ->label('YouTube')
                                ->placeholder('Enter YouTube URL')
                                ->url()
                                ->columnSpan(1),
                            TextInput::make('twitter')
                                ->label('Twitter')
                                ->placeholder('Enter Twitter URL')
                                ->url()
                                ->columnSpan(1),
                        ]),
                ])
                ->collapsed(false),
            Section::make('College Information')
            ->description('Manage college details')
            ->schema([
                Grid::make(4)
                    ->schema([
                        TextInput::make('location')
                            ->label('College Location')
                            ->placeholder('Enter college location')
                            ->columnSpanFull()
                            ->prefix('https://www.google.com/maps/embed?pb=')
                            ->suffix('width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"'),
                        TextInput::make('address')
                            ->label('College Address')
                            ->placeholder('Enter college address'),
                        TextInput::make('phone')
                            ->label('Phone Number')
                            ->placeholder('Enter phone number')
                            ->tel(),
                        TextInput::make('email')
                            ->label('Email')
                            ->placeholder('Enter email')
                            ->email(),
                    ]),
            ])
            ->collapsed(false),
        ]);
    }
}
