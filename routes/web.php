<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UploadController;
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


Route::get('/', function () {
    return view('pages.index');
});

Route::get('/dashboard', [AuthController::class, 'show_dashboard']);
Route::get('/admin', [AuthController::class, 'login_auth']);
Route::get('/login-auth', [AuthController::class, 'login_auth']);
Route::post('/login-auth-handle', [AuthController::class, 'login_auth_handle']);
Route::get('/admin-logout', [AuthController::class, 'logout_dashboard']);

Route::get('/register-auth', [AuthController::class, 'register_auth']);
Route::post('/register-auth-handle', [AuthController::class, 'register_auth_handle']);

Route::post('/uploads-ckeditor', [UploadController::class, 'ckeditor_image']);
Route::get('/file-browser', [UploadController::class, 'ckeditor_browser']);
Route::get('/delete-image-ckeditor', [UploadController::class, 'ckeditor_delete']);

Route::prefix('admin')->group(function () {
    Route::prefix('service')->group(function () {
        Route::get('/index', [ServiceController::class, 'index']);
        Route::get('/create', [ServiceController::class, 'create']);
        Route::post('/store', [ServiceController::class, 'store']);
        Route::get('/edit/{id}', [ServiceController::class, 'edit']);
        Route::post('/update/{id}', [ServiceController::class, 'update']);
        Route::get('/destroy/{id}', [ServiceController::class, 'destroy']);
    });
    Route::prefix('price')->group(function () {
        Route::get('/show', [PriceController::class, 'show']);
        Route::post('/store', [PriceController::class, 'store']);
    });
    Route::prefix('post')->group(function () {
        Route::get('/index', [PostController::class, 'index']);
        Route::get('/create', [PostController::class, 'create']);
        Route::post('/store', [PostController::class, 'store']);
        Route::get('/edit/{id}', [PostController::class, 'edit']);
        Route::post('/update/{id}', [PostController::class, 'update']);
        Route::get('/destroy/{id}', [PostController::class, 'destroy']);
    });
    Route::prefix('contact')->group(function () {
        Route::get('/index', [ContactController::class, 'index']);
        Route::get('/show/{id}', [ContactController::class, 'show']);
        Route::get('/destroy/{id}', [ContactController::class, 'destroy']);
        Route::get('/status-pending/{id}', [ContactController::class, 'status_pending']);
        Route::get('/status-success/{id}', [ContactController::class, 'status_success']);
    });
});
