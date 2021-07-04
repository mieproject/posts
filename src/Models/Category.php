<?php

namespace MieProject\Posts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @method static get()
 */
class Category extends Model
{
    use HasFactory,HasTranslations;
    public $translatable = ['name'];
}
