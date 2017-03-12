<?php

use App\Post;
use App\User;
use App\Role;
use App\Country;
use App\Photo;
use App\Video;
use App\Tag;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/phone', function () {
//    return "jsajas";
//});
//
//Route::get('/email', function () {
//    return "email here";
//});
//
//Route::get('/posts/{id}/{name}', function ($id, $name) {
//    return 'wtfConcat?'.$id.'sadads:   '.$name;
//});
//
//Route::get('/very/long/route/here', array('as'=>'pretty.short', function () {
//    $url = route('pretty.short');
//
//    return "the url is:  " .$url;
//}));

//Route::get('/posts', 'PostsController@index');
use Illuminate\Support\Facades\DB;

Route::resource('posts', 'PostsController');

Route::get('contact', 'PostsController@contact');

Route::get('/post/{id}', 'PostsController@showPost');



/*
|--------------------------------------------------------------------------
| DB raw
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/insert', function() {
//   DB::insert('insert into posts(header, body) values(?, ?)', ['asdsad', 'asdasd']);
// });
//
// Route::get('/read', function() {
//   $results = DB::select('select * from posts where id = ?', [1]);
//
//   return $results;
//
//   // foreach ($results as $post) {
//   //   return $post->header;
//   // }
// });
//
// Route::get('/update', function() {
//   $rows = DB::update('update posts set header = "Updated Title" where id = ?', [1]);
//
//   return $rows;
// });
//
// Route::get('/delete', function() {
//   $deleted = DB::delete('delete from posts where id = ?', [1]);
//
//   return $deleted;
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
| */

// Route::get('/find', function() {
//   $post = Post::find(1);
//
//   return $post->header;
// });

// Route::get('/find', function()
// {
//   $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//
//   return $posts;
// });


// Route::get('/find', function()
// {
//   $posts = Post::findOrFail(3);
//
//   return $posts;
// });


// Route::get('/insert', function()
// {
//   $post = new Post;
//
//   $post->header = 'the header';
//   $post->body = 'text';
//
//   $post -> save();
// });
//
// Route::get('/insertUpdate', function()
// {
//   $post = Post::find(1);
//
//   $post->header = 'the header';
//   $post->body = 'text';
//
//   $post -> save();
// });


// Route::get('/create', function()
// {
//   // error without fillable
//
//   Post::create(['header'=>'the created header', 'body' => 'some text created here']);
//
//
// });


// Route::get('/update', function()
// {
//
//
//   Post::where('id', 2)->where('is_admin', 0)->update(['header' => 'updated header', 'body' => 'updated body']);
//
//
//
// });


// Route::get('/delete', function()
// {
//
//
//   $post = Post::find(2);
//
//   $post->delete();
//
// });


// Route::get('/delete', function()
// {
//
//
//   Post::destroy([2,3,4,5]);
//
// // Post::where('id', 1)->delete();
// });



// Route::get('/softDelete', function()
// {
//
//
//
//   Post::find(2)->delete();
//
//
//
// });



// Route::get('/readsoftdelete', function()
// {
//
//
//
//   // $post = Post::find(1);
//   //
//   // return $post;
// // ____________________________________
//   // $post = Post::withTrashed()->where('id', 1)->get();
//   //
//   // return $post;
// //_________________________________
//
//   $post = Post::onlyTrashed()->where('id', 1)->get();
//
//   return $post;
//
// });


// Route::get('/restore', function()
// {
//
//
//
//   Post::withTrashed()->where('is_admin', 0)->restore();
//
//
//
//
// });



// Route::get('/permadelete', function()
// {
//
//
//   Post::withTrashed()->where('is_admin', 0)->forceDelete();
//
//
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT RELATIONSHIPS
|--------------------------------------------------------------------------
| */


//    ----ONE TO ONE----

// Route::get('/user/{id}/post', function($id)
// {
//
//   return User::find($id)->post;
//
//
// });
//
//
// Route::get('/post/{id}/user', function($id)
// {
//
//   return Post::find($id)->user->name;
//
//
// });



//    ----ONE TO MANY----

// Route::get('/user/{id}/posts', function($id)
// {
//
//   $posts = User::find($id)->posts;
//
//   foreach ($posts as $post) {
//     echo $post->header . "<br>";
//   }
//
// });

//    ----MANY TO MANY----

// Route::get('/user/{id}/role', function($id)
// {
//
//   return User::find($id)->roles;
//
// });
//
//
// Route::get('/role/{id}/users', function($id)
// {
//
//   return Role::find($id)->users;
//
// });

// Route::get('/user/{id}/pivot', function($id)
// {
//   $roles = User::find($id)->roles;
//
//   foreach ($roles as $role) {
//     echo $role->pivot;
//   }
// });

//    ----MANY TO MANY----

// Route::get('/user/{id}/country', function($id)
// {
//   return User::find($id)->country->name;
// });
//
// Route::get('/country/{id}/users', function($id)
// {
//   return Country::find($id)->users;
// });
//
// Route::get('/country/{id}/posts', function($id)
// {
//   return Country::find($id)->posts;
// });


// POLIMORPHIC RELATIONS

// Route::get('/user/{id}/photos', function($id)
// {
//
//   $photos = User::find($id)->photos;
//
//   return $photos;
//
// });
//
//
// Route::get('/post/{id}/photos', function($id)
// {
//
//   $photos = Post::find($id)->photos;
//
//   return $photos;
//
// });


// Route::get('/photo/{id}/post', function($id)
// {
//
//   $photo = Photo::findOrFail($id);
//
//   return $photo->imageable;
//
// });



// POLIMORPHIC MANY TO MANY


// Route::get('/video/{id}/tags', function($id)
// {
//   return Video::find($id)->tags;
// });
//
//
//
// Route::get('/post/{id}/tags', function($id)
// {
//   return Post::find($id)->tags;
// });
//
//
// Route::get('/tag/{id}/posts', function($id)
// {
//   return Tag::find($id)->posts;
// });
//
//
// Route::get('/tag/{id}/videos', function($id)
// {
//   return Tag::find($id)->videos;
// });
