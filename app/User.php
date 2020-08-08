<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
         'password',
         'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function songs(){
        return $this->hasMany(Song::class);
    }
    public function albums(){
        return $this->hasMany(Album::class);
    }
    
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public function artist(){
        return $this->hasOne(Artist::class);
    }
    public function abusive(){
        return $this->hasMany(Abusive::class);
    }
    


}
