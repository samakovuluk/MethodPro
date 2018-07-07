<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $fillable = [
        'name', 'site', 'average_s', 'description', 'lat', 'lng'
    ];
}
