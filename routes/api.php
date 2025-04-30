<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AccountController;
use App\Http\Controllers\api\StudentController;
use App\Http\Controllers\api\CourseSubjectController;

// Public routes
Route::post('/register', [AccountController::class, 'register']);
Route::post('/login', [AccountController::class, 'login']);
Route::post('/student/create', [StudentController::class, 'store']);
Route::put('/student/update', [StudentController::class, 'update']);
Route::get('/student/get-all', [StudentController::class, 'index']);
Route::get('/student/id', [StudentController::class, 'show']);

// Course Subject routes
Route::get('/course-subject/get', [CourseSubjectController::class, 'index']);
Route::get('/course-subject/get/id', [CourseSubjectController::class, 'show']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::put('/account/update', [AccountController::class, 'update']);
    Route::post('/account/change-password', [AccountController::class, 'changePassword']);
    Route::put('/account/change-status', [AccountController::class, 'changeStatus']);

    // Student routes
    Route::put('/student/update-status', [StudentController::class, 'updateStatus']);
    Route::delete('/student/delete', [StudentController::class, 'destroy']);
});
