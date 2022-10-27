@extends('layout.master')

@section('title')
    To do list 
@stop

@section('content')

    <div class="container">
        <div class="col-md-8 offset-md-2">
            <a href="{{route('add')}}" class="btn btn-primary">Add Task</a><br>
            <table class="table">
                <thead>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Task</b></td>
                        <td><b>Done</b></td>
                        <td><b>Edit</b></td>
                        <td><b>Delete</b></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task_column}}</td>
                        <td>
                            @if ($task->done===0)
                                <a href="{{route('done', $task->id)}}">False</a>
                            @elseif($task->done===1)
                                <a href="{{route('done', $task->id)}}">True</a>
                            @endif
                        </td>
                        <td><a href="{{route('edit', $task->id)}}">Edit</a></td>
                        <td><a href="{{route('delete', $task->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
