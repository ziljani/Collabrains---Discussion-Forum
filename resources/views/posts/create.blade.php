@extends('layouts.app')

@section('content')
<style>
    body{
        background-color:#bae1c4;
        
    }
</style> 
    <h1>Write Your Question Here</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}

        <div class="form-group">
            {{Form::label('category','Category')}}
            {{Form::select('category', $cats, null, ['placeholder' => 'Select a Category'])}}
        </div>

        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body', '', ['id'=>'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body' ])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection