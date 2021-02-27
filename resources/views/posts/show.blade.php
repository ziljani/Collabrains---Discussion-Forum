@extends('layouts.app')

@section('content')
<style>
    body{
        background-color:#577783;
        color: white;
    }
</style> 
    <a href="/posts" class="btn btn-default" style="background-color: #70EE9C; color:black;">Go Back</a><br><br>

    <div>
        {{$post->category->name}} 
        {!! Form::open(['action' => '\App\Http\Controllers\FollowController@store', 'method' => 'POST']) !!}
        {{Form::hidden('cat_id', $post->category_id)}}
        {{Form::submit('Follow', ['class' => 'btn btn-success'])}}
        {!! Form::close() !!}
    </div>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    @if(count($post->replies)>0)
        <div>
            @foreach($post->replies as $reply)
                {{$reply->reply_content}}
                <hr>
                    <small>{{$reply->user->name}} {{$reply->created_at}}</small>
                <hr>
            @endforeach
        </div>
    @endif
    <a href="/posts/{{$post->id}}/reply" class="btn btn-default" style="background-color: #70EE9C">Answer</a><br><br>

    @if(Auth::check())
        @if(Auth::user()->id == $post->user_id)
    
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default" style="background-color: #70EE9C">Edit</a><br><br>

            {!!Form::open(['action' => ['\App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection