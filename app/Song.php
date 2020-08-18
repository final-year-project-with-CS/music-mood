<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Song extends Model
{
    protected $fillable = [
       'name', 'genre', 'artist_id', 'genre','duration','play_count','status'
    ];

   
    public function user() {
        return $this->belongsTo(User::class);
    }


    public function album() {
        return $this->belongsTo(Album::class);
    }
    public function abusive() {
        return $this->hasOne(Abusive::class);
    }
}