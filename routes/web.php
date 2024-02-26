<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [PostsController::class, 'index']);
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('posts/{id}', [PostsController::class, 'show']);
Route::post('posts', [PostsController::class, 'store']);
Route::get('posts/{id}/edit', [PostsController::class, 'edit']);
Route::patch('posts/{id}', [PostsController::class, 'update']);
Route::delete('posts/{id}', [PostsController::class, 'destroy']);
