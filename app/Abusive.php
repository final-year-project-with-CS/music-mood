<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Abusive extends Model
{
    protected $table = 'abusives';

    protected $primarykey = 'id';

    protected $fillable = [
            'song_id',
            'abusive_word',
            'song_name',
            'status',
            'no_words',
            
    ];

    protected $timestamp = true;


    public function user(){
        return $this->hasMany(User::class);
    }
    public function song(){
        return $this->hasOne(Song::class);
    }

}
