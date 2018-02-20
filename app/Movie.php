<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $timestamps = false;
    public $fillable = [
        'name',
        'category_id',
        'user_id',
        'description',
        'year',
        'rating'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo( Category::class);
    }

    public function actors(){
        return $this->belongsToMany(Actor::class, 'actor_movie');
    }
}
