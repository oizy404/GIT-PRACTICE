<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function show(){
        $tasks = Task::all();

        return view("pages.home")->with("tasks", $tasks);
    }

    public function insert(Request $request){
        $task = new Task();
        $task->task_column = $request->task_input;
        $task->done = false;
        $task->save();

        return redirect()->route('front-page');
    }
    public function edit($id){
        $task = Task::find($id); //edit to update

        return view("pages.edit")->with("task", $task);
    }
    public function update(Request $request, $id){
        $task = Task::find($id); //update
        $task->task_column = $request->task_input;
        $task->save();

        return redirect()->route('front-page');
    }
    public function delete($id){
        $task = Task::find($id);
        $task->delete(); //delete a column

        return redirect()->route('front-page');
    }

    public function done($id){
        $task = Task::find($id);
        if($task->done == false){
            $task->done=1;
        }
        elseif($task->done == true){
            $task->done=0;
        }
        $task->save();

        return redirect()->route('front-page');
    }

}
