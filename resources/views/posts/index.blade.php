@extends('layouts.app')

@section('content')
<style>
    body{
        background-color:#12bac5;
        color: white;
    }
    .well{
        color: white;
        margin: 16px 0;
        padding: 16px;
        background-color: #92267a;
        border-radius:8px; 
    }
    .well h3 a{
        color:#ffffff;/* #931621; 473198*/
    }
</style>
<body>
        <h1 style="font-weight: 900;text-align:center;">Posts</h1>
        @if(count($user->followings) > 0)
            @foreach($user->followings as $following)
                @foreach($following->category->posts as $post)
                    <a href="/posts/{{$post->id}}">
                        <div class="well">
                            <p style="max-height:24px; white-space: nowrap; width:1024px; overflow:hidden; text-overflow:ellipsis; ">{{$post->body}}...</p>
                            <h6>Written on {{$post->created_at}} by {{$post->user->name}} </h6>
                            <a href="/posts/{{$post->id}}/reply" class="btn btn-default" style="background-color: #70EE9C">Answer</a><br><br>
                        </div>
                    </a>
                @endforeach
            @endforeach
        @else
            <p>No post found</p>
        @endif
    @endsection
</body>