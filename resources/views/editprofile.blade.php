<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    
</head>
<body>

    <style>
        
.edit{
    width: 60%;
    margin: auto;
}

.submit-changes{
    margin-top: 16px;
    margin-bottom: 16px;
    background-color: #f1920c;
    color: white;
    border: #f1920c;
    border-radius: 8px;
}
    </style>
        <!-- Edit profile -->

        <h3 style="font-family: acme; text-align: center; margin-bottom: 16px; margin-top: 16px;">Edit Profile</h3>
        <div class="edit container">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email:</label>
                    <input type="email" class="form-control" id="inputEmail">
                </div>
                    <h6 style="margin-top: 16px;">Password Change</h6>
                    <div class="form-group col-md-6" style="padding-left: 0 !important;">
                    <label for="inputOldpass">Old Password</label>
                    <input type="password" class="form-control" id="inputOldpass">
                    </div>
                    <div class="form-group col-md-6" style="padding-left: 0 !important;">
                    <label for="inputNewpass">New Password</label>
                    <input type="password" class="form-control" id="inputNewpass">
                    </div>
                    <div class="form-group col-md-6" style="padding-left: 0 !important;">
                    <label for="ReNewpass">Re-enter New Password</label>
                    <input type="password" class="form-control" id="ReNewpass">
                    </div>
               
                 <input type="submit" value="Save changes" class="submit-changes">
               
            </form>
            
        </div>

    </section>

</body>
</html>