<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    public function newTaskPage()
    {
        return view('components.newTask');
    }

    public function editTaskPage($slug)
    {
        $task = Task::where('slug',$slug)->first();
        return view('components.editTask', ['task' => $task]);
    }

    public function tasks()
    {
        $user = Auth::user();
        $tasks = Task::where('user_id', $user->id)->get();
        return view('components.tasks', ['tasks' => $tasks]);
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'description' => 'required',
            'priority' => 'required'
        ]);

        $task = new Task();
        $task->user_id = $validatedData['user_id'];
        $task->description = $validatedData['description'];
        $task->priority = $validatedData['priority'];
        $task->save();

        return redirect('/tasks')->with('success', 'Data berhasil disimpan!');
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        $task->description = $request->input('description');
        $task->priority = $request->input('priority');
        $task->is_completed = $request->has('status') ? true : false;
        $task->save();

        return redirect()->route('tasks')->with('success', 'Data Telah di perbarui');
    }

    public function updateStatus(Request $request, $id)
    {
        $task = Task::find($id);
        $task->is_completed = $request->has('is_completed') ? true : false;
        $task->save();

        return redirect()->back()->with('success', 'Status updated successfully!');
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('tasks')->with('success', 'Tugas Berhasil di hapus');
    }
}
