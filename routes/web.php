<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/hello', function () {
    //return view('welcome');
    return 'Hello World';
});
route::get('/users/{id}',function($id){
    return 'This is user ' . $id;
});*/

Route::get('/', 'App\Http\Controllers\PagesController@index');
// Route::get('/about', 'App\Http\Controllers\PagesController@about');
// Route::get('/services', 'App\Http\Controllers\PagesController@services');


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

use App\Http\Controllers\PostsController; 
Route::resource('posts', PostsController::class); 
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);

Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit']);

Route::put('/profile/update', [App\Http\Controllers\ProfileController::class, 'update']);

Route::get('/posts/{id}/reply', [App\Http\Controllers\PostsController::class, 'create_reply']);

Route::post('/posts/reply', [App\Http\Controllers\PostsController::class, 'store_reply']);

Route::post('/following', [App\Http\Controllers\FollowController::class, 'store']);
