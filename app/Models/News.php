<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [
        'id',
        'title_es', // Done
        'title_pt',
        'title_en',
        'description_es', // Done
        'description_pt', // Done
        'description_en', // Done
        'short_description_es', // Done
        'short_description_pt', // Done
        'short_description_en', // Done
        'image', // Done
        'document', // Done
        'tags',
    ];

    protected function casts(): array
    {
        return [
            'tags' => 'array',
        ];
    }
}
