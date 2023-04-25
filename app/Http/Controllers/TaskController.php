<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(){
      $tasks = Task::all();
      $users = User::all();
      return view('./tasks/index', compact('tasks', 'users'));
    }

    public function new(){
      $tasks = Task::all();
      $current_user_id = Auth::id();
      return view('./tasks/new', compact('tasks', 'current_user_id'));
    }

    public function create(Request $request){
      $request->validate([
        'name' => 'required',
        'description' => 'required',
        'status' => 'required',
        'user_id' => 'required',
      ]);

      Task::create([
        'name' => $request->name,
        'description' => $request->description,
        'status' => $request->status,
        'user_id' => $request->user_id,
      ]);

      return back()->with('success', 'Tache créée avec succès !');
    }

    public function delete(Task $task){
      $task->delete();
      return back()->with('success', 'Tache supprimée avec succès !');
    }

    public function edit(Task $task){
      return view('./tasks/edit', compact('task'));
    }

    public function update(Request $request, Task $task){
    $request->validate([
      'name' => 'required',
      'description' => 'required',
      'status' => 'required',
      'user_id' => 'required',
    ]);

    $task->update([
      'name' => $request->name,
      'description' => $request->description,
      'status' => $request->status,
      'user_id' => $request->user_id,
    ]);

    return back()->with('success', 'Tache modifiée avec succès !');
    }

    public function done(Task $task){
      $task->update([
        'status' => 'completed',
      ]);

      $taskName = $task->name;
      return back()->with('success', 'Tache '. $taskName .' terminée avec succès !');
    }
}
