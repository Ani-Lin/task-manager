<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\TaskController;

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

Route::get('/',[UserController::class, 'index'])->name('login');
Route::post('/auth/login', [UserController::class, 'loginUser'])->name('authenticate');
Route::get('/auth/register', [UserController::class, 'register'])->name('register');
Route::post('/auth/signup', [UserController::class, 'createUser'])->name('signup');

Route::group(['middleware' => ['auth:sanctum']], function()
{
    // here all of the routes that requires auth to be checked like this
    // Route::resource('user','UsersController');
    
    
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/dashboard',[TaskController::class,'index'])->name('dashboard');
    Route::get('/create',[TaskController::class,'create'])->name('addTask');
    Route::post('/store', [TaskController::class ,'store'])->name('store');
    Route::get('/edit/{task_id}', [TaskController::class ,'edit'])->name('edit');
    Route::post('/update/{task_id}', [TaskController::class ,'update'])->name('update');
    Route::get('/destroy/{task_id}', [TaskController::class ,'destroy'])->name('destroy');
    
});

