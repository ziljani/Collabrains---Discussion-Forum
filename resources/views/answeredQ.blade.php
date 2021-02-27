@extends('layouts.app')

@section('content')
<style>
    body{
        background-color: #bc382e;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"style="background-color: #eee7da; font-size:24px; text-align:center">{{ __('Dashboard') }}</div>

                <div class="card-body" style="background-color: #eee7da">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-info" style=" color:white; font-size:16px">Create Post</a><br><br>    
                    <div class="blogpost" style="font-size: 24px">{{ __('Your Blog Posts') }}</div><br>
                    @if(count($posts) > 0)
                    <table class="table table-striped" style="background-color: #eee7da">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit">Edit</a></td>
                            <td>
                                {!!Form::open(['action' => ['\App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>

                        @endforeach
                    </table>
                    @else
                        <p>You Have no Posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
