@extends('layouts.app')

@section('content')
<style>
        body{
                background-color: #21b3a9;
                color: white;
        }

        .grid-item-image{
                text-align: center
        }

        .btn{
                padding: 0.5rem 1.5rem;
                background: #388369;
                color: white;
                display: inline-block;
                font-family: 'Raleway',sans-serif;
                font-weight: 700;
                font-size: 1.1rem;
        }

</style>
        <h1 style="text-align: center">Welcome to Collabrains!</h1>
        <div class="grid-item-image">
                <img src="/images/forum_discussion.jpg">
        </div><br>
        <div class="grid-item-content"style="font-size: 18px;">
                <p>This is an online platform open for all Engineering students to ask their doubts related to their subjects as well as answer their fellow students' doubts.
                Our aim is to connect all the Engineering students on a single platform where they can discuss about their doubts and clear them.
                Various categories of questions have already been provided for convenience!</p>
                <p style="text-align: center">To get started, just register in a few easy steps!</p>
                @guest
                <div style="text-align: center">
                        <a href="/login" class="btn login-button" style="margin-left: 0">Login</a>
                        <a href="/register" class="btn register-button">Register</a>
                </div>
                @endguest
        </div>
@endsection