<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Schedules
    Route::get('/schedules', [ScheduleController::class, 'index']);
    Route::get('/schedules/{id}', [ScheduleController::class, 'show']);
    Route::post('/schedules', [ScheduleController::class, 'store']);
    Route::put('/schedules/{id}', [ScheduleController::class, 'update']);
    Route::delete('/schedules/{id}', [ScheduleController::class, 'destroy']);

    // Teachers
    Route::get('/teachers', [TeacherController::class, 'index']);
    Route::get('/teachers/{id}', [TeacherController::class, 'show']);
    Route::post('/teachers', [TeacherController::class, 'store']);
    Route::put('/teachers/{id}', [TeacherController::class, 'update']);
    Route::delete('/teachers/{id}', [TeacherController::class, 'destroy']);

    // Subjects
    Route::get('/subjects', [SubjectController::class, 'index']);
    Route::get('/subjects/{id}', [SubjectController::class, 'show']);
    Route::post('/subjects', [SubjectController::class, 'store']);
    Route::put('/subjects/{id}', [SubjectController::class, 'update']);
    Route::delete('/subjects/{id}', [SubjectController::class, 'destroy']);

    // Classrooms
    Route::get('/classrooms', [ClassroomController::class, 'index']);
    Route::get('/classrooms/{id}', [ClassroomController::class, 'show']);
    Route::post('/classrooms', [ClassroomController::class, 'store']);
    Route::put('/classrooms/{id}', [ClassroomController::class, 'update']);
    Route::delete('/classrooms/{id}', [ClassroomController::class, 'destroy']);

    // Students
    Route::get('/students', [StudentController::class, 'index']);
    Route::get('/students/{id}', [StudentController::class, 'show']);
    Route::post('/students', [StudentController::class, 'store']);
    Route::put('/students/{id}', [StudentController::class, 'update']);
    Route::delete('/students/{id}', [StudentController::class, 'destroy']);

    // Tasks
    Route::get('/tasks', [TasksController::class, 'index']);
    Route::post('/tasks', [TasksController::class, 'store']);
    Route::put('/tasks/{task}', [TasksController::class, 'update']);
    Route::delete('/tasks/{task}', [TasksController::class, 'destroy']);
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/loginUser', [AuthController::class, 'loginUser']);
Route::post('/logoutUser', [AuthController::class, 'logoutUser'])->middleware('auth:sanctum');