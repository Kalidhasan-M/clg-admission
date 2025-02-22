<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $fb;
    public string $insta;
    public string $ytube;
    public string $twitter;
    public string $location;
    public static function group(): string
    {
        return 'general';
    }
}