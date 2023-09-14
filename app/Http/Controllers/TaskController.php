<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function __constructor(){
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user()->name;
        $tasks= Task::get_all_tasks();
        return view('dashboard', compact('tasks'));
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
          ]);
          Task::create($request->all());
          return redirect()->route('dashboard')
            ->with('success','Task created successfully.');
    }

    
    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
          ]);
          $task = Task::find($id);
          $task->update($request->all());
          return redirect()->route('dashboard')
            ->with('success', 'Task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('dashboard')
        ->with('success', 'Task deleted successfully');
    }

    public function create()
    {
        $users = User::all();
        return view('add_task',compact('users'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        $users = User::all();
        $data=array(
            'task' => $task,
            'users' => $users
        );
        return view('edit_task', $data);
    }
}
