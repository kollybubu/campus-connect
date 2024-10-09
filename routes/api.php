<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\Dashboard\TeacherController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ResourceController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Faculty\CourseController;
use App\Http\Controllers\Faculty\ProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// For Admin

    // User Crud
    Route::prefix('users')->name('users.')->group(function() {
        Route::post('/register', [UserController::class, 'store']);
        Route::post('/update', [UserController::class, 'update']);
    });

    // Teacher ru
    Route::prefix('teachers')->name('teachers.')->group(function() {
        Route::get('/', [TeacherController::class, 'index']);
    });

    // Student ru
    Route::prefix('students')->name('students.')->group(function() {
        Route::get('/', [StudentController::class, 'index']);
    });

    // Category Crud
    Route::prefix('categories')->name('categories.')->group(function() {
        Route::get('/', [CategoryController::class, 'index']);
        Route::post('/', [CategoryController::class, 'store']);
    });

    // Post Crud
      
    // Project User Crud


    // Resource Crud
    Route::prefix('resources')->name('resources.')->group(function() {
        Route::get('/', [ResourceController::class, 'index'])->name('index');
    });

    // Event Crud
 

// For Teacher
Route::prefix('faculties')->name('faculties.')->group(function() {

    // Course Crud
    Route::prefix('courses')->name('courses.')->group(function() {
        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::get('/{id}', [CourseController::class, 'show'])->name('show');
        Route::get('/category/{id}', [CourseController::class, 'showCourseWithCategory'])->name('showCourseWithCategory');
    });

});

// Comment Crud


Route::group(['middleware' => 'auth:sanctum'], function (){
    Route::get('/posts', [PostController::class, 'index']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::delete('/posts/{id}/destory', [PostController::class, 'destory'])->name('posts.destroy');
    Route::post('/posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/{id}/show', [PostController::class, 'show']);
    Route::get('/user-posts', [PostController::class, 'postByUserId']);
    Route::get('/event', [PostController::class, 'postByCategoryId']);


    Route::get('/comment', [CommentController::class, 'index'])->name('index');
    Route::post('/commentC', [CommentController::class, 'store']);
    Route::get('/commentS/{id}/show', [CommentController::class, 'show']);
    Route::delete('/commentD/{id}/destory', [CommentController::class, 'destory']);

    
});

// Teacher Crud
// Student Crud
// Category Crud
// Post Crud
// Course Crud
// Project Crud
// Project User Crud
// Resource Crud
// Event Crud
// Comment Crud