<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BotmanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AccountController;
use App\Models\Category;

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
    ]);
});

Route::get('/about', function () {
    return view('about', [
    ]);
});
Route::get('/transaksi', function () {
    return view('transaksi', [
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth');
Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug'])
->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/account', [AccountController::class, 'index'])->middleware('auth');
//Route::get('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'show'])->middleware('auth');
//Route::get('/dashboard/post/create', [DashboardPostController::class, 'create'])->middleware('auth');


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('category', [
//         'title' => $category->name,
//         'posts' => $category->posts->load(['category', 'user']),
//         'category' => $category->name,
//     ]);
// });

// Route::get('/categories', function (Category $category) {
//     return view('posts', [
//         'title' => 'Category',
//         'categories' => Category::all()
//     ]);
// });


Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle']);
Route::get('/botman/tinker',  [BotmanController::class, 'tinker']);
