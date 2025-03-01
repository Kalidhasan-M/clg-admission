<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.fb', 'Spatie');
        $this->migrator->add('general.insta', 'Spatie1');
        $this->migrator->add('general.ytube', 'Spatie2');
        $this->migrator->add('general.twitter', 'Spatie3');
        $this->migrator->add('general.location', 'Spatie4');
        $this->migrator->add('general.address', 'Spatie5');
        $this->migrator->add('general.phone', 'Spatie6');
        $this->migrator->add('general.email', 'Spatie7');
    }
};
