<?php

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

Route::get('test', function () {

	$user = \App\Models\User::firstOrFail();
	$view = 'emails.confirm';
	$data = compact('user');
	$from = 'admin@admin.test';
	$name = 'admin';
	$to = $user->email;
	$subject = '感谢注册 weibo 应用！请确认你的邮箱。';

	\Mail::send($view, $data, function ($message) use ($from, $name, $to, $subject) {
		$message->from($from, $name)->to($to)->subject($subject);
	});
	return strtolower(str_random(100));	
});

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

// 激活邮箱
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');