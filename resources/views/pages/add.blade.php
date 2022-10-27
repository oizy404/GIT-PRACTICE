@extends('layout.master')

@section('title')
    Add task
@stop

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <h4>Add Task</h4>

            <form action="{{route('insert')}}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <br>
                    <label for="form-label">New Task</label>
                    <input type="text" class="form-control" name="task_input" required placeholder="Enter Task here">

                    <input type="submit" value="Add" class="mt-2 btn btn-info">
                </div>
            </form>
        </div>
    </div>
@stop
