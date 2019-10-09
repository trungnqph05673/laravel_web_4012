<?php

use App\Models\User;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Http\Request;


Route::get('/', function(){
	return view('welcome');
});

Route::group([
	'prefix' => 'users',
	'as' => 'users.',
],function() {

Route::get('/' , 'UserController@index')->name('index');

Route::get('create' , 'UserController@create')->name('create');

// Route::get('update/{id}' , 'UserController@update');

Route::get('delete/{id}' , 'UserController@delete')->name('delete');

Route::get('{id}' , 'UserController@show')->name('show');

});

Route::get('users/{id}/edit', function ($id) {
    $user = User::find($id);
    return view('users.update', [
        'user' => $user
    ]);
});
Route::post('users/{id}/update', function ($id, Request $request) {
    $user = User::find($id);
    $user->update([
        'name' => $request->name,
        'brithday' => $request->brithday,
        'email' => $request->email
    ]);
    return redirect()->route('users.index');
})->name('users.update');


Route::post('store' , function(Request $request){
	$data=$request->all();

	$user = User::create([
		'name' =>$data['name'],
        'email' => $data['email'],
        'brithday' =>$data['brithday'],
        'password' =>bcrypt('123456'),
	]);
	return redirect()->route('users.index');
})->name('store');
Route::get('post' , function(){
	$posts = Post::all();
	foreach($posts as $post){
		$post->user;

	}
	
	return view('post', ['posts' => $posts]);
});


