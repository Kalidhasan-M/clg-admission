<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        $departments = [
            ['name' => 'Physics', 'department' => 'B.Sc'],
            ['name' => 'Tamil', 'department' => 'B.A'],
            ['name' => 'Chartered Accountancy', 'department' => 'B.Com'],
            ['name' => 'Mathematics', 'department' => 'B.Sc'],
            ['name' => 'Computer Science', 'department' => 'BCA'],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}