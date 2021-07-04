<?php

namespace MieProject\Posts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Tag extends Model
{
    use HasFactory,HasSlug,HasTranslations;
    public $translatable = ['name'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->usingLanguage(app()->getLocale())
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
