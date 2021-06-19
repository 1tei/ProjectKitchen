<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CommentController;

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

Route::get('/recipes/create', [RecipeController::class, 'create']);
Route::post('/recipes', [RecipeController::class, 'store']);

Route::delete('/recipe/{id}', [RecipeController::class, 'destroy']);
Route::delete('/recipes/{id}', [CommentController::class, 'destroy']);

Route::get('/recipe/edit/{id}', [RecipeController::class, 'edit']);
Route::post('/recipes', [RecipeController::class, 'update']);

Route::get('/recipe/{id}', [CommentController::class, 'show']);
Route::post('/recipe/{id}', [CommentController::class, 'store']);

