@extends('layouts.app')

@section('content')
<body style="background-color: #666bbb; color:#ffffff;">
        <h1 style="text-align: center;"><?php echo $title;?></h1><br>
        <h2 style="text-align: center">Publish your passions, your way!<br><br>
                Create a unique and beautiful blog.</h2>
                <h3 style="text-align: center"> It’s easy and free.</h3><br>
                <h1 style="text-align: center">Just 2 easy Steps!</h1><br>
                <h2 style="text-align: center"> Step 1.</h2>
        <p style="text-align: center">
                <a class="btn btn-primary btn-lg" href="/login" role="button" style="background-color: orange;">Login</a>
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p><br>
        <div class="step2" style="text-align: center">
        <h2 style="text-align: center"> Step 2.</h2>
        <a class="btn btn-primary btn-lg" href="/posts/create" role="button" style="background-color:orangered;">Create Post</a>
        </div>
@endsection
