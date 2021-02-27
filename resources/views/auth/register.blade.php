<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collabrains</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: 'Raleway',sans-serif;
  
}
.btn{
    padding: 0.5rem 1.5rem;
    background: #12bac5;
    color: white;
    display: inline-block;
    font-family: 'Raleway',sans-serif;
    font-weight: 700;
    font-size: 1.1rem;
}
a{
    text-decoration: none;
}
.login{
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 2rem;
     background: #f3f3f3;
}

.loginimage{
    height: 851px;
    width: 1000px;
}
.login-form{
    margin: 2rem;
}
.logo-line{
    margin-bottom: 2rem;
    display: inline;
}
.collabrains{
    margin-bottom: 2rem;
}
.l-heading{
    font-family: 'Raleway', sans-serif;
    font-size: 2.2rem;
    color: #51306b;
}
.purple{
    color:#92267a;
}
.form-heading{
    margin: 1.5rem 0;
    font-size: 1.8rem;
    font-family: 'Raleway',sans-serif;
    color: #51306b;
}
.form{
    margin: 1.5rem 0;
}
label{
    display: block;
    font-size: 1.2rem;
    color: #12bac5;
    font-family: 'Raleway',sans-serif;
    margin-bottom: 0.7rem;
}
input{
    display: block;
    margin-bottom: 1rem;
    background-color: #f3f3f3;
    border: none;
    border-bottom: 1px solid#12bac5;
    width: 100%;
    height: 2rem;
}
input:focus{
    outline: none;
}
::placeholder{
    color: #92267a;
}
.forgot{
    display: inline;
    margin-left: 12.5rem;
    opacity: 0.7;
    font-size: 1rem;
    color: #92267a;
}
.a-divider-break{
    text-align: center; /* this brings New Here to center*/
    position: relative;/*this is for positioning*/
    top: 2px;
    padding-top: 1px;
    margin-bottom: 14px;
    line-height: 0;
    margin-top: 2rem;
}
.a-divider-break h5{
    line-height: 1;
    font-size: 12px;
    color:#92267a;
    font-weight: 400;
    z-index: 2;
    position: relative;
    display: inline-block;/*this is to make a block of white color*/
    background-color: #f3f3f3;
    padding: 0 8px 0 8px;
}
.a-divider-break:after{
    /*this thing creates a grey line of new here*/
    content: "";/*necessary whenever u use :before or :after*/
    width: 100%;
    background-color: transparent;
    display: block;
    height: 1px;
    border-top: 1px solid #92267a;
    position: absolute;
    top: 50%;/*using this the line is brought up*/
    margin-top: -1px;
    z-index: 1;
}
.signup-button{
    width: 100%;
    text-align: center;
    margin-top: 1rem;
}
    </style>
</head>
<body>
    <section class="mainpage">
        <div class="login">
            <div class="login-image">
                <img src='/images/side.png' class="loginimage">
            </div>
            <div class="login-form">
               <div class="logo-line">
                <a href="/"><div class="collabrains" style="font-size: 48px">Collabrains</a>
                </div>
                <h1 class="l-heading">Welcome To <span class="purple">Collabrains</span></h1>
                <h2 class="form-heading">Signup</h2>
                <form class="form"method="POST" action="{{ route('register') }}">
                    @csrf   
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="id">Email ID</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"><br><br>
                    <input style="cursor: pointer;" type="submit" name="submit" class="btn button-primary">
                </form>
                 <div class="a-divider a-divider-break">
                    <h5>Already Have an Account?</h5>
                </div>
                <a href="/login" class="btn signup-button">Sign In</a>
            </div>
        </div>
    </section>
</body>
</html>