<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'programs' => 'array',
        'content' => 'array',
        'banner_image' => 'array'
    ];
}
