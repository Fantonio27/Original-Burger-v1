<?php
session_start();
include "includes/db.php";

include "includes/remain.php";
$CODE =  $_SESSION['code'];
$EMAIL = $_SESSION['lemail'];
$phone = $_SESSION['lphone'];
//echo"$CODE";
//echo"$phone";

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
            width:480px;
            background-color:white;
            margin:auto;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
            padding:20px 30px 30px 30px;
        }

        .pics{
           height:110px;
           weight:110px;
           margin-top:80px;
        }

        .p1{
            font-size:24px;
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

        .btn1{
            margin-top:10px;
            border:0px;
            background-color:white;
            width:100%;
        }

        a{
            text-decoration:none;
        }

        .p4{
            font-size:20px;
            position:relative;
            bottom:20;
            text-align:center;
            color:#0466c8;
        }
    </style>
    <body>
        <div class="row" style="height:200px"></div>
        <div class="row" style="height:500px">
            <div class="box">
                <form method="post">
                    <a href="index.php">Back</a>
                    <center><img src="pictures/email (1).png" class="pics"></center>
                    <p class="p1">An email has been sent to</p>
                    <p class="p4"><?php echo"$EMAIL";?></p>
                    <p class="p2">Check the email that's associated with your account for the verfication code.</p>
                    <p class="p3">Verification Code</p>
                    <input type="number" name="verifycode" class="form-control"><br>
                    <input type="submit" name="verify" value="Verify" class="btn btn-primary">
                    <input type="submit" class="btn1" name="resend" value="Resend">
                    <?php include 'includes/insert.php';?>
                </form>
            </div>
        </div>
    </body>
</html>

