<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VCommentController;
use App\Http\Controllers\ProfileController;

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
    return view('main');
});

Route::get('/dashboard', function () {
    return view('main');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/video', [VideoController::class, 'index']);

Route::get('/recipes/create', [RecipeController::class, 'create']);
Route::post('/recipes/create', [RecipeController::class, 'store']);

Route::delete('/recipe/{id}', [RecipeController::class, 'destroy']);
Route::delete('/recipes/{id}', [CommentController::class, 'destroy']);
Route::delete('/video/{id}', [VideoController::class, 'destroy']);
Route::delete('/videos/{id}', [VCommentController::class, 'destroy']);

Route::get('/recipe/edit/{id}', [RecipeController::class, 'edit']);
Route::post('/recipes/edit/{id}', [RecipeController::class, 'update']);

Route::get('/recipe/{id}', [CommentController::class, 'show']);
Route::post('/recipe/{id}', [CommentController::class, 'store']);


Route::get('/video/add', [VideoController::class, 'create']);
Route::post('/video/add', [VideoController::class, 'store']);

Route::get('/video/edit/{id}', [VideoController::class, 'edit']);
Route::post('/video/edit/{id}', [VideoController::class, 'update']);

Route::get('/video/{id}', [VCommentController::class, 'show']);
Route::post('/video/{id}', [vCommentController::class, 'store']);


Route::get('/profile', [ProfileController::class, 'index']);
