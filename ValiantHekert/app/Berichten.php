<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berichten extends Model
{
    protected $fillable = [
        'titel', 'content',
    ];
}
