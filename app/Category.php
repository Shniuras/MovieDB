<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    public $fillable = [
        'id',
        'name',
        'description',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function movies(){
        return $this->hasMany(Movie::class);
    }


}
