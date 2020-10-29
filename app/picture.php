<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class picture extends Model
{
    //
    protected $table = 'pictures';
    protected $fillable = [
        'name', 'url',
    ];
}
