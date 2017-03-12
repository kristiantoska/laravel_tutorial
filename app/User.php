<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;
use App\Role;
use App\Country;
use App\Photo;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post(){

      return $this->hasOne(Post::class);

    }

    public function posts(){

      return $this->hasMany(Post::class);

    }

    public function roles(){

      return $this->belongsToMany(Role::class);

    }

    public function country(){
      return $this->belongsTo(Country::class);
    }

    public function photos() {

      return $this->morphMany(Photo::class, 'imageable');

    }
}
