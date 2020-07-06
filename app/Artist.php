<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artists';

    protected $primarykey = 'id';

    protected $fillable = [
            'first_name',
            'last_name',
            'user_name',
            'home_town',
            'label',
            'genre',
            'status'
    ];

    protected $timestamp = true;



    public function user(){
        return $this->belongsTo(User::class);
    }
}
