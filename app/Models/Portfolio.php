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
        'avatar',
        'body',
        'slug',
        'status',
    ];

    public function galleries()
    {
        return $this->morphMany('App\Models\Gallery', 'galleryable');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
