<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// TASK CONTROLLER
use App\Http\Controllers\TaskController;
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');

Route::get('/tasks/new', [TaskController::class, 'new'])->name('tasks.new');
Route::get('tasks/{task}', [TaskController::class, 'show'])->name('task.show');
Route::post('/task/new', [TaskController::class, 'create'])->name('tasks.create');

Route::delete('/tasks/{task}', [TaskController::class, 'delete'])->name('task.delete');

Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('task.update');

Route::put('/tasks/{task}/done', [TaskController::class, 'done'])->name('task.done');

// MAINTENANCE CONTROLLER
use App\Http\Controllers\MaintenanceConvertsController;
Route::get('/maintenances', [MaintenanceConvertsController::class, 'index'])->name('maintenances');

Route::get('/maintenances/new', [MaintenanceConvertsController::class, 'new'])->name('maintenances.new');
Route::get('maintenances/{maintenance}', [MaintenanceConvertsController::class, 'show'])->name('maintenance.show');
Route::post('/maintenances/new', [MaintenanceConvertsController::class, 'create'])->name('maintenances.create');
