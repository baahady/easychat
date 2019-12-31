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
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
        'avatar',
        'profileUrl'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany('app\Post');
    }

    public function getAvatar(){
        //return 'https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=45&d=mm';
        return 'https://www.gravatar.com/avatar/'.md5($this->email).'?s=45&d=mm';
    }

    public function getAvatarAttribute(){
        return $this->getAvatar();
    }

    public function getRouteKeyName(){
        return 'username';
    }

    public function getProfileUrlAttribute(){
        return route('user.index',$this);
    }

    public function following(){
        return $this->belongsToMany('App\User','follows','user_id','follower_id');
    }
}
