<?php
session_start();
include "includes/db.php";
//echo"$CODE";

if(isset($_POST['resetpass'])){
    $EMAIL = $_GET['em'];  
    $PASS= $_POST['pass1'];

    $sql = "UPDATE user SET PASSWORD='$PASS' WHERE EMAIL_ADDRESS='$EMAIL' ";
    $result = mysqli_query($conn,$sql);

    if (mysqli_query($conn,$sql)===TRUE){
        echo "<script>alert('Your password has been changed successfully')</script>";
    }else{
        echo "<script>alert('Password reset failed')</script>";
    }
}

?>

<html>
    <head>
        <title>Verification Code</title>
        <link rel="icon" href="pictures/22 (2).png" type="image/icon type">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    </head>
    <style>
        body{
            background-color:#f8f9fa;
            overflow-y:hidden;
        }

        .box{
            height:;
            width:500px;
            background-color:white;
            margin:auto;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
            padding:20px 40px 30px 40px;
        }


        .p1{
            font-size:27px;
            font-weight:bold;
            font-family: 'Open Sans', sans-serif;
            color:#343a40;
            margin-top:40px;
            text-align:center;
        }

        .p2{
            font-size:16px;
            font-family: 'Open Sans', sans-serif;
            color:#495057;
            font-weight:bold;
        }

        .btn{
            width:100%;
        }

        .p3{
            font-family: 'Open Sans', sans-serif;
            font-weight:bold;
            color:#495057;
            
        }

        a{
            text-decoration:none;
        }

        .p4{
            font-size:16px;
            position:relative;
            text-align:center;
            color:#0466c8;
        }

        .c{
            position:relative;
            bottom:7;
        }

        .b{
            float:right;
            margin-left:8px;
        }

        .b1{
            float:right;
            position:relative;
            top:6;
        }
    </style>
    <body>
        <div class="row" style="height:200px"></div>
        <div class="row" style="height:500px">
            <div class="box">
                <form method="post">
                    <p class="p1">Reset your Password</p>
                    <p class="p2">Enter your new passwod</p>
                    <input type="password" name="pass1" class="form-control c" placeholder="" id="password" required>
                    <p class="b">Show password</p><input type="checkbox" onclick="myFunction()" class="b1" >
                    <br><p class="p2">Confirm new passwod</p>
                    <input type="password" name="pass1" class="form-control c" placeholder="" id="confirm" required>
                    <p class="b">Show password</p> <input type="checkbox" onclick="myFunction1()" class="b1" >
                    <input type="submit" name="resetpass" value="Change password" class="btn btn-primary c">
                    <center><a href="forgetpass.php" class="p4">Back</a></center>     
            </div>
        </div>
    </body>
    </form>
</html>

<script>
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>
function myFunction1() {
  var x = document.getElementById("confirm");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>