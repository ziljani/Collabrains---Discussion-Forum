<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <style>
            .profile-grid{
        padding: 32px;
        display: grid;
        grid-template-columns: auto;
        grid-row-gap: 32px;
        width: 50%;
        border: 2px solid #f1920c;
        border-radius: 16px;
        margin: auto;
        font-size: 18px;
        }

        .profile{
        font-size: 20px;
        }

        .profile-grid{
            padding: 32px;
            display: grid;
            grid-template-columns: auto;
            grid-row-gap: 32px;
            width: 50%;
            border: 2px solid #f1920c;
            border-radius: 16px;
            margin: auto;
            font-size: 18px;
        }

        .edit-button{
            border: solid 1px #f1920c;
            border-radius: 8px;
            background-color: #f1920c;
            color: white;
            padding-right: 8px;
            padding-left: 8px;
            padding-bottom: 2px;
            padding-top: 2px;
        }

        .profile-grid p{
            margin: 0;
            font-weight: bold;
            color: #0A0E58;
        }

    </style>


<div class="profile-grid">
    <div class="profile-name">
        <p>Name:</p>
        <div class="display-name">
            your name
        </div>
    </div>
    <div class="email-add">
        <p>Email Address:</p>
        <div class="display-email">
            your email address
        </div>
    </div>
    <div class="mob-no">
        <p>Mobile Number:</p>
        <div class="display-mob-no">
            your mobile number
        </div>
    </div>
    <form action="edit-profile.html">
        <button class="edit-button" style="float: right; cursor: pointer;">Edit</button>
    </form>
</div>
</body>
</html>