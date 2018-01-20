@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Task descriptions
                        <a class="pull-right" href="{{url('tasks')}}">task list</a>
                    </div>

                    <div class="panel-body">

                        @if(Session::has('success_message'))
                            <div class="alert alert-success">{{Session::get('success_message')}}
                            </div>
                        @endif

                        @if(Request::is('*/update'))
                            {!! Form::model($task, ['method' => 'PATCH', 'files'=>true, 'url' => 'tasks/'.$task->id]) !!}
                        @else
                            {!! Form::open(['url' => 'tasks/save', 'files'=>true]) !!}
                        @endif

                        {!! Form::label('name', 'Name') !!}
                        {!! Form::input('text','name', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Name', 'required' => 'required', 'maxlength' => 300]) !!}
                        <br>

                            {!! Form::label('description', 'Description') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Description', 'required' => 'required','maxlength' => 1000]) !!}

                        <br>
                        {!! Form::label('attached', 'Attached') !!}
                        {!! Form::token() !!}
                        {!! Form::file('file') !!}
                        <br>
                        {!!	Form::submit('save',['class' => 'btn btn-primary'])!!}
                        {!! Form::close() !!}

            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
