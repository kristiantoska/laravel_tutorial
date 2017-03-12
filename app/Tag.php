<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Video;

class Tag extends Model
{
    //

    public function posts() {
      return $this->morphedByMany(Post::class, 'taggable');
    }



    public function videos() {
      return $this->morphedByMany(Video::class, 'taggable');
    }
}
