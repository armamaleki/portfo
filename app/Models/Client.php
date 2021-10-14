<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'body',
        'address',
    ];

    public function comments()
    {
        return $this->morphMany('App\Models\Galley', 'gallryable');
    }
}
