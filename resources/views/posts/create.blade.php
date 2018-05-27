@extends('layouts.app')

@section('content')
<!-- <a href="/posts" class="btn btn-default">Back</a><br> -->
    <h2>Add Notes</h2><br>
        {!! Form::open(['action'=> 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div><br>
            <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', '', ['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div><br>
            <div class="form-group">
                <p>Select a file to upload.</p>
                {{Form::file('attached_file')}}
            </div><br>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    
@endsection