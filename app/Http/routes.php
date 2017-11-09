<?php

use App\Post;
use App\User;
use App\Country;




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/post/{id}','PostsController@index');


//Route::resource('posts', 'PostsController');

// Route::get('/contact','PostsController@contact');

// Route::get('post/{id}/{name}/{password}','PostsController@show_post');




// Route::get('/insert', function(){
// 	DB:: insert('insert into posts (title, content) values(?,?)',['Laravel is awesome with Edwin', 'Laravel is the best']);
// });

// Route::get('/read', function(){
// 	$results = DB::select('select * from posts where id = ?', [1]);

// 	return var_dump($results);


// 	// foreach ($results as $post) {
// 	// 	# code...
// 	// 	return $post->title;
// 	// }
// });



// Route::get('/update', function(){
// 	$update = DB::update('update posts set title ="Update title" where id=?', [1]);
// 	return $update;
// });

// Route::get('/delete', function(){

// 	$deleted = DB::delete('delete from posts where id= ?', [1]);
// 	return $deleted;
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
|
*/

// Route::get('/read', function(){

// 	$posts = Post::all();

// 	foreach($posts as $post){
// 		return $post->title;
// 	}


// });


// Route::get('/find', function(){

// 	$post = Post::find(2);

// 	return $post->title;


// });



// Route::get('/findwhere', function(){
// 	$posts = Post::where('title', '=','Laravel is awesome with Edwin')->orderBy('id', 'desc')->take(3)->get();
// 	return $posts;

// });

// Route::get('/find');

// Route::get('/findmore', function(){

// 	// $posts = Post::findOrFail(1);

// 	// return $posts;


// 	$posts = Post::where('users_count','<',50)->firstOrFail();

// });


// Route::get('/basicinsert', function(){
	

// 	$post = new Post;


// 	$post->title = 'new Eloquent title insert 2';
// 	$post->content = 'Wow Eloquent is really cool, look at this content 2';

// 	$post->save();
// });



// Route::get('/basicinsert2', function(){
// 	//create new 
// 	// $post = new Post;

// 	$post = Post::find(2);
// 	$post->title = 'new Eloquent title insert 2';
// 	$post->content = 'Wow Eloquent is really cool, look at this content 2';

// 	$post->save();
// });



// Route::get('/create',function(){

// 	Post::create(['title'=>'the create method', 'content'=>'WOW I\' am learning alot with Edwin Diaz']);

// });


// Route::get('/update', function(){

// 	Post::where('id', 2)->where('is_admin',0)->update(['title'=>'New php title', 'content'=>'I love you ']);

// });


// Route::get('/delete', function(){

// 	$post = Post::find(3);
// 	$post->delete();
// });

// Route::get('/delete2', function(){

// 	Post::destroy([3,4,5]);

// 	//Post::where('is_admin','0')->delete();
// });



// Route::get('/softdelete', function(){


// 	Post::find(2)->delete();

// });

// Route::get('/readsoftdelete', function(){


// 	// $post = Post::find(1);
// 	// return $post;

// 	$post = Post::withTrashed()->where('is_admin', 0)->get();
// 	return $post;


// 	// $post = Post::onlyTrashed()->where('is_admin', 0)->get();
// 	// return $post;



// });



// Route::get('/restore',function(){

// 	Post::withTrashed()->where('is_admin',0)->restore();


// });


// Route::get('/forcedelete', function(){

// 	Post::onlyTrashed()->where('is_admin',0)->forcedelete();

// });


/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
|
*/


// //One to One relationship
// Route::get('/user/{id}/post', function($id){

// 	return User::find($id)->post->title;

// });

// Route::get('/post/{id}/user', function($id){

// 	return Post::find($id)->user->name;

// });


// //One to Many relationship
// Route::get('/posts', function(){

// 	$user = User::find(1);

// 	foreach($user->posts as $post)
// 	{
// 		echo $post->title;
// 		echo '<br/>';

// 	}
// });


// //Many to Many relationship

// Route::get('/user/{id}/role', function($id){

// 	$user = User::find($id)->roles()->orderBy('id', 'desc')->get();

// 	// foreach($user->roles as $role){
// 	// 	return $role->name;
// 	// }

// 	return $user;
// });


// Accessing the intermediate  table /pivot

// Route::get('user/pivot', function(){

// 	$user = User::find(1);

// 	foreach ($user->roles as $role) {
// 		# code...
// 		echo $role->pivot->created_at;
// 	}

// });

// Route::get('/user/country', function(){

// 	$country = Country::find(2);
 
// 	foreach ($country->posts as $post) {
// 		# code...
// 		return $post->title;
// 	}

// });



// Polymorphic Releations


Route::get('user/photos', function(){

	$user = User::find(1);


	foreach ($user->photos as $photo) {
		# code...
		return $photo;
	}

});

Route::get('post/{id}/photos', function($id){

	$post = Post::find($id);


	foreach ($post->photos as $photo) {
		# code...
		echo $photo->path;
	}

});


