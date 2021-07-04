<?php

namespace MieProject\Posts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PostType extends Model
{
    use HasFactory,HasTranslations;
    public $translatable = ['name'];
}
