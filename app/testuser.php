<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testuser extends Model
{
    public $fillable = [
        'user_name', 'user_email', 'user_phone'
    ];
}
