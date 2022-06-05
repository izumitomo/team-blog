<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        "id",
        'body',
        "theme_id",
        ];
        
}
