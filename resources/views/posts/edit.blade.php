@extends('layouts.app')

@section('content')
<style>
    body{
        background-color:#bae1c4;
        
    }
</style> 
    <h1>Edit Posts</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\PostsController@update',$post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('category','Category')}}
            {{Form::select('category', $cats, $post->category_id, ['placeholder' => 'Select a Category'])}}
        </div>

        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body' ])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection