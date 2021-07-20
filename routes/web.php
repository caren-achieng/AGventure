<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CreateArticleController;

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

//home
Route::get('/', function () {
    return view('dashboard');
})->middleware('auth')->name('home');

//uploading a picture
Route::get('/upload', function() {
    return view('upload');
})->name('upload');

Route::post('/my-upload',[UploadFileController::class, 'upload'])->name('my_upload');

//looking at feed
Route::get('/posts', [PostController::class,'index'])->name('posts');

//creating articles
Route::get('/writearticles', function() {
    return view('createarticle');
})->name('createarticle');

Route::post('/writing-articles',[CreateArticleController::class, 'create'])->name('written_articles');

//looking at articles
Route::get('/articles', [ArticlesController::class,'index'])->name('articles');



