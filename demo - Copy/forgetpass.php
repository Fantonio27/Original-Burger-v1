<?php
session_start();
include "includes/db.php";
//echo"$CODE";

if(isset($_POST['sendemail'])){
    $EMAIL = $_POST['emailadd'];

    $sql = "SELECT EMAIL_ADDRESS FROM user WHERE EMAIL_ADDRESS = '$EMAIL'";
    $result = mysqli_query($conn,$sql);

    if ($result->num_rows > 0) {
        $emailto = "$EMAIL";
        $subject="Forget Password";

        $headers = "From:myoukyuusaisha@gmail\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message = "<html>
        <table border='2' height='35%' width='40%'
            cellspacing='2' cellpadding='20' align='center'>
        
        <tr><td><center><p>Hello! you are receiving this email because we recieved a password reset for your account 
            To reset your password, please click the button below</p></center>
            <center><a href='http://localhost/cip_1102/demo/resetpass.php?em=$EMAIL'><input type='submit' name='send email' value='reset password' class='btn btn-primary c'></a></center>
        </td></tr>
                    
	
	    </html>" ;

        if( mail($emailto,$subject,$message,$headers) ){
            echo"<script>alert('Email Sent, Please check you Inbox Thank you!')</script>";
        }
        else 
            echo " message could not be sent"; 
    }
    else{
        echo'<script>alert("Sorry, this Email Address is not registered yet")</script>' ;
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
            text-align:center;
            position:relative;
            bottom:10;
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
            margin-bottom:10px;
        }
    </style>
    <body>
        <div class="row" style="height:200px"></div>
        <div class="row" style="height:500px">
            <div class="box">
                <form method="post">
                    <p class="p1">Forget Password</p>
                    <p class="p2">Enter your email address</p>
                    <input type="email" name="emailadd" class="form-control c" placeholder="Enter your Email Address" 
                    pattern="[a-zA-Z-z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$" 
                    title="must contain a dot sign, add at least 2 letters." required>

                    <input type="submit" name="sendemail" value="Send email" class="btn btn-primary c">
                    <center><a href="index.php" class="p4">Back</a></center>     
            </div>
        </div>
    </body>
    </form>
</html>