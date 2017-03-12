<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Photo;
use App\Tag;

class Post extends Model
{

  use SoftDeletes;



    protected $dates = ['deleted_at'];


    protected $fillable = ['header', 'body'];


    public function user(){

      return $this->belongsTo(User::class);

    }


    public function photos() {

      return $this->morphMany(Photo::class, 'imageable');

    }


    public function tags() {
      return $this->morphToMany(Tag::class, 'taggable');
    }
}
