{{-- @extends('layouts.app')

@section('content')

<style>
    body{
        background-color: #bc382e;
    }

    .DBmenu{
        font-size: 20px;
        text-align: center;
        background-color: bisque;
    }

    .Question{
        margin: 30px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"style="background-color: #eee7da; font-size:24px; text-align:center">{{ __('Dashboard') }}</div>
                    <div class="DBmenu">
                        <a href="/askedQ"><div class="Question">Asked Questions</div></a>
                        <a href="/answeredQ"><div class="Question">Answered Questions</div></a>
                        <a><div class="Question">Categories You Follow</div></a>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection --}}


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
        <h1 style="font-weight: 900;">Asked Questions</h1>
        @if(count($user->posts) > 0)
                @foreach($user->posts as $post)
                    <a href="/posts/{{$post->id}}">
                        <div class="well">
                            <p style="max-height:24px; white-space: nowrap; width:1024px; overflow:hidden; text-overflow:ellipsis; ">{{$post->body}}...</p>
                            <h6>Written on {{$post->created_at}} by {{$post->user->name}} </h6>
                            <a href="/posts/{{$post->id}}/reply" class="btn btn-default" style="background-color: #70EE9C">Answer</a><br><br>
                        </div>
                    </a>
                @endforeach
        @else
            <p>No asked questions</p>
        @endif

        <h1 style="font-weight: 900;">Answered Questions</h1>
        @if(count($user->replies) > 0)
                @foreach($user->replies as $reply)
                    <a href="/posts/{{$reply->post_id}}">
                        <div class="well">
                            <p style="max-height:24px; white-space: nowrap; width:1024px; overflow:hidden; text-overflow:ellipsis; ">{{$reply->post->body}}...</p>
                        </div>
                    </a>
                @endforeach
        @else
            <p>No answered questions</p>
        @endif

        <h1 style="font-weight: 900;">Categories You Follow</h1>
        @if(count($user->followings) > 0)
                @foreach($user->followings as $following)
                    <div class="well">
                        {{$following->category->name}}
                    </div>
                @endforeach
        @else
            <p>No Categories Followed</p>
        @endif
    @endsection
</body>