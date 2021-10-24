<?php

namespace App\Models;
use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'company',
        'avatar',
        'address',
    ];

    public function comments()
    {
        return $this->morphMany('App\Models\Gallery', 'galleryable');
    }

    public function galleries()
    {
        return $this->morphMany('App\Models\Gallery', 'galleryable'   );
    }
}
