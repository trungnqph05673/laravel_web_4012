<?php

use App\Models\User;
use App\Models\Post;


Route::get('/', function(){
	return view('welcome');
});

Route::get('starter' , function(){
	$users = factory(User::class,10)->make()->toArray();
	
	return view('starter', ['users' => $users]);
});

Route::get('post' , function(){
	$posts = factory(Post::class,10)->make()->toArray();
	
	return view('post', ['posts' => $posts]);
});
