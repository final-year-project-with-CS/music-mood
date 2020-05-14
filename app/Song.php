<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
    protected $fillable = [
        'name','time','artist','album','genre'

    ];
}
