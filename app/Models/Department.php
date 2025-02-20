<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'faculties' => 'array',
        'programs'  => 'array',
        'forms'    =>'array',
    ];
    public function dept()
    {
        return $this->hasMany(Student::class);
    }
}
