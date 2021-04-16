<?php

use App\Http\Controllers\AddPostController;
use App\Http\Middleware\AdminCheckMiddleware;
use App\Http\Middleware\ModeratorCheckMiddleware;
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


Route::get('/dashboard', function () {
    return view('AdminLte.dashboard');
});


Auth::routes();
Route::get('/logout', 'HomeController@logout');


Route::get('/', 'MainSite@index');
Route::get('posts', 'PostsController@index');
Route::get('post/{idpost}', 'PostController@viewpost');
Route::post('post/{idpost}', 'PostController@AddComment');

Route::middleware([ModeratorCheckMiddleware::class])->group(function () {
    Route::get('add-post', [AddPostController::class,'index']);
    Route::post('add-post', [AddPostController::class,'AddPost']);

    Route::get('edit-post', 'EditPostController@index');
    Route::post('edit-post', 'EditPostController@EditPost');

    Route::get('del-post', 'DelPostController@index');
    Route::post('del-post', 'DelPostController@DelPost');
});
Route::middleware([AdminCheckMiddleware::class])->group(function () {
    Route::get('add-mod', 'AddModController@index');
    Route::post('add-mod', 'AddModController@Addmod');

    Route::get('del-mod', 'DelModController@index');
    Route::post('del-mod', 'DelModController@DelMod');
});

Route::get('my-comments', 'MyCommentsController@index')->middleware('auth');
Route::post('my-comments', 'MyCommentsController@DelCom')->middleware('auth');

Route::get('comment/edit/{idcomment}', 'MyCommentsController@viewcomment');
Route::post('comment/edit/{idcomment}', 'MyCommentsController@editcomment');

Route::get('/home', 'HomeController@index')->name('home');

