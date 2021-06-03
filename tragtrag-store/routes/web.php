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

Auth::routes();
// Admin Themes
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog-manager', 'HomeController@posts');

Route::get('/add-new-post', 'HomeController@addBlog');

Route::get('/user', 'HomeController@user');

Route::post('/addCategory', 'HomeController@addCategory');

Route::post('/addPost', 'HomeController@addPost');

// WelCome Themes
Route::get('/.well-known/pki-validation/', 'WelcomeController@checkSsl');

Route::get('/', 'WelcomeController@index');

Route::get('/post/{id}', ['uses' => 'WelcomeController@post']);

Route::get('/store', 'WelcomeController@store');

// Route::get('user/{name?}', function ($name = 'jonh') { //không bắt buộc có param
//     return $name;
// });

// Route::get('/post/{id}', function ($id) {// bắt buộc có param
// 	return 'post '.$id;
// });

// Route::get('/user/profile', 'UserController@profile')->name('user.profile');// Chưa dùng đc

// Route::get('/auth/user', function ($username, $password) { // có thể dùng cách này

// })->middleware('checkUser');

// Route::get('/auth/user', 'UserController@showProfile')->middleware('checkUser');// Nếu check cho 1 route duy nhất thì có thể viết như này

// Route::group(['middleware' => 'checkUser'], function () {
// 	Route::get('profile', 'UserController@showProfile')->middleware('checkUser');
// });

// Route::get('login', function () {
// 	return view('login');
// });


