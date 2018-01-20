@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tasks
                        <a class="pull-right" href="{{url('tasks/newTask')}}">Create</a>
                    </div>

                    <div class="panel-body">

                        @if(Session::has('success_message'))
                            <div class="alert alert-success">{{Session::get('success_message')}}
                            </div>
                        @endif

                        <table class="table">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task -> id }}</td>
                                    <td>{{ $task -> name }}</td>
                                    <td width="350">{{ $task -> description }}</td>
                                    <td>
                                        <a href="tasks/{{ $task->id }}/update" class="btn btn-default btn-sm">Update</a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => '/tasks/'.$task->id, 'style' => 'display: inline;', 'onsubmit' => 'return confirm("are you sure ?")']) !!}
                                        <button type="submit" class="btn btn-default btn-sm">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
