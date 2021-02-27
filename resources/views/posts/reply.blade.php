@extends('layouts.app')

@section('content')
<style>
    body{
        background-color:#bae1c4;
        
    }
</style> 
    <h1>Write Your Answer Here</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\PostsController@store_reply', 'method' => 'POST']) !!}


        <div class="form-group">
            {{Form::textarea('body', '', ['id'=>'article-ckeditor','class' => 'form-control', 'placeholder' => 'Answer' ])}}
        </div>
        {{Form::hidden('post_id',$post_id)}}
        {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection
