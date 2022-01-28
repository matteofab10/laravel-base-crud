<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'type',
        'price',
        'series',
        'slug',
    ];
}
