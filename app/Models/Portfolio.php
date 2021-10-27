<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'client',
        'url',
        'body',
        'slug',
    ];

    public function galleries()
    {
        return $this->morphMany('App\Models\Gallery', 'galleryable');
    }
}
