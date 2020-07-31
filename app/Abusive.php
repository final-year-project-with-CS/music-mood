<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abusive extends Model
{
    protected $table = 'abusives';

    protected $primarykey = 'id';

    protected $fillable = [
            'song_id',
            'abusive_word',
            'no_words',
            
    ];

    protected $timestamp = true;

}
