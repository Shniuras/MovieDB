<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;
    public $fillable = [
        'filename',
        'user_id',
        'imagable_id',
        'imagable_type'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function actor(){
        return $this->morphTo();
    }
}
