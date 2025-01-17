<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded=['id'];
    /**
     * The Attributes that are mass assignable.
     *
     * @var array
     */


    /**
     * The Attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Topics()
    {
         return $this->hasMany('App\Topic');
    }
}
