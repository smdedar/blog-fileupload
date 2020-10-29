<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bloguser extends Model
{
    //
    public $table = 'blogusers';
    public $fillable = [
        'user_name', 'user_email', 'user_phone',
    ];
}
