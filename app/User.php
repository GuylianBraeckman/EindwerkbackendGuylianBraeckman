<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'is_active', 'email', 'photo_id', 'password', 'role_id'
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

    /**methods van user class**/

    public function role(){
        return $this->belongsto('App\Role');
    }

    public function photo(){
        return $this->belongsto('App\Photo');
    }
/**andere functies**/
    public function isAdmin(){
        if($this->role->name == 'administrator' && $this->is_active == 1){
            return true;
        }
        return false;
    }

}
