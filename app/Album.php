<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name', 'genre'
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function songs() {
        return $this->hasMany(Song::class);
    }

}
