<?php

namespace App\Http\Controllers;

use App\Task;
use \Storage;

use Illuminate\Http\Request;
use Redirect;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::get();
        return view('tasks.list', ['tasks' => $tasks]);
    }

    public function newTask()
    {
        return view('tasks.form');
    }

    public function saveTask(Request $request)
    {

        $task = new Task();

        $task = $task->create($request->all());

        \Session::flash('success_message', 'Task created successfully!');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $destinationPath = config('app.fileDestinationPath') . '/' . $fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
        }

            return Redirect::to('tasks/newTask');

    }


    public function update($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.form', ['task' => $task]);
    }


    public function updating($id, Request $request)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());

        \Session::flash('success_message', 'Task updating successfully!');
        return Redirect::to('tasks/' . $task->id . '/update');
    }


    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        \Session::flash('success_message', 'Task deleted successfully!');
        return Redirect::to('tasks');
    }
}
