<?php


use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/farmer/{id}', [PostController::class, 'index'])->name('farmer');



//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

//uploading a picture
Route::get('/upload', function() {
    return view('upload');
})->name('upload');

Route::prefix('/posts')->name('posts.')->group(function() {
    Route::get('/', [\App\Http\Controllers\Admin\PostController::class,'index'])->name('index');
    Route::get('/create', [\App\Http\Controllers\Admin\PostController::class,'create'])->name('create');
    Route::post('/store',[\App\Http\Controllers\Admin\PostController::class, 'store'])->name('store');
});
Route::prefix('/articles')->name('articles.')->group(function() {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/store', [ArticleController::class, 'store'])->name('store');
});


