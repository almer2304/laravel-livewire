<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Genre extends Model
{
    protected $fillable = ['name', 'slug'];

    public static function booted()
    {
        static::creating(function ($genre) {
            $genre->uuid = (string) Str::uuid();
        });
    }
}
