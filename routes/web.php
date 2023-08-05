<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ArticleController::class, 'getArticles']);
Route::get('/article/{id}', [ArticleController::class, 'getArticleById']);
Route::view('/addArticle', 'pages.addArticle')->middleware('auth');
Route::post('/addArticle', [ArticleController::class, 'addArticle'])->middleware('auth');
Route::view('/profile', 'pages.profile')->middleware('verified');
Route::get('/deleteArticle/{id}', [ArticleController::class, 'deleteArticle'])->middleware('auth');
Route::post('/addComment', [CommentController::class, 'addComment'])->middleware('auth');
Route::post('/uploadAvatar', [ProfileController::class, 'uploadAvatar'])->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

require __DIR__.'/auth.php';
