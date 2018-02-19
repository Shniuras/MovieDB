<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public $timestamps = false;
    public $fillable = [
        'name',
        'birthday',
        'user_id'
    ];
}
