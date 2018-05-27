@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Back</a>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> 

            {!!Form::open(['action' => ['PostsController@destroy', $post->id ], 'method' => 'POST', 'class'=>'pull-right'])!!} 
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif

    <br><br>
    <h1>{{$post->title}}</h1>
    <br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>

    @if($post->attached_file)
    <h4>Attached File:</h4>
    <h4><a href="/storage/attached_file/{{$post->attached_file}}">{{$post->attached_file}}</a></h4>
    <br><br>
    <small> Written on {{$post->created_at}}  by {{$post->user->name}}</small>
    <hr>
    @endif

    
@endsection