<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable=[
        'title',
        'body',
        'slug',
        'avatar',
        'status',
        'user_id',
        ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
