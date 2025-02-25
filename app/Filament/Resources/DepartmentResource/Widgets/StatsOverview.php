<?php

namespace App\Filament\Resources\DepartmentResource\Widgets;

use App\Models\Department;
use App\Models\Enquiry;
use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('No.of Students', Student::count()),
            Stat::make('No.of Courses', Department::count()),
            Stat::make('No.of Enquiries', Enquiry::count()),
        ];
    }
}