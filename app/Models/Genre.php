<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name', 'slug'];

    public static function booted()
    {
        static::creating(function ($genre) {
            $genre->uuid = (string) \Illuminate\Support\Str::uuid();
        });
    }
}
