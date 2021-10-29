<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function portfolio()
    {
        return $this->belongsToMany(Portfolio::class);
    }

    protected $fillable=['title'];
    public $timestamps = false;
}
