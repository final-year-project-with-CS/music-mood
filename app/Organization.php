<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name', 'location', 'email', 'phone_no','address', 'description'
    ];


    public function users(){
        return $this->hasMany(User::class);
    }
}
