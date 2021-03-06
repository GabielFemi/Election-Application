<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
    	'url',
    	'positions'
    ];

    protected $casts = [
    	'positions' => 'array'
    ];
}
