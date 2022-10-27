@extends('layout.master')

@section('title')
    Edit task
@stop

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <h4>Edit Task</h4>

            <form action="{{route('update', $task->id)}}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <br>
                    <label for="form-label">Task</label>
                    <input type="text" value="{{$task->task_column}}" class="form-control" name="task_input" required placeholder="Enter Task here">
                    <input type="submit" value="Update" class="mt-2 btn btn-success">
                </div>
            </form>
        </div>
    </div>
@stop
