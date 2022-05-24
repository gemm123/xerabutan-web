<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BotmanController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

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
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});
Route::get('/login', function () {
    return view('login', [
        "title" => "About"
    ]);
});
Route::get('/register', function () {
    return view('register', [
        "title" => "About",
        "title" => "About",
        "about" => "about"
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts->load(['category', 'user']),
        'category' => $category->name,
    ]);
});

Route::get('/categories', function (Category $category) {
    return view('posts', [
        'title' => 'Category',
        'categories' => Category::all()
    ]);
});


Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle']);
Route::get('/botman/tinker',  [BotmanController::class, 'tinker']);
