<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;

class Country extends Model
{
    public function users() {
      return $this->hasMany(User::class);
    }

    public function posts() {
      return $this->hasManyThrough(Post::class, User::class);
    }
}
