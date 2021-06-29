<?php

namespace MieProject\Posts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlLink extends Model
{
    use HasFactory;

    protected $casts = [
        'rel' => 'array'
    ];
}
