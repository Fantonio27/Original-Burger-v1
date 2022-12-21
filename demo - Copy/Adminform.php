<html>
    <head>
        <link rel="icon" href="pictures/22 (2).png" type="image/icon type">
        <title>Admin Form</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    </head>
    <style>
        body{
            background-color:#FFF5E1;
        }
        .box{
            width:600px;
            height:470px;
            background-color:white;
            margin:auto;
            margin-top:250px;
            border-radius:15px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            padding:50px 60px;
        }

        .pic{
            height:80px;
            width:80px;
        }

        .p1{
            text-align:center;
            font-weight:bold;
            font-size:30px;
            margin-top:5px;
        }

        .b{
            float:right;
        }

        .passicon{
            position:relative;
            bottom:45;
            left:430;
        }

        a{
            text-decoration:none;
        }

        .a{
            margin-bottom:15px;
        }
    </style>
    <body>
        <div class="box form-control">
            <form method="post">
                <center><img src="pictures/profile.png" class="pic"></center>
                <p class="p1">Admin Panel</p>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control txtpass" id="floatingPassword" placeholder="Password" name="password" 
                    minlength="8" maxlength="20" required><img src="pictures/visibility.png" class="passicon" style="cursor:pointer" id="passicon" onclick="changeImage()">
                    <label for="floatingPassword"><font color="#495057">Password</font></label>                                    
                </div>
                
                <input type="submit" name="submit" value="Log In" class="Form-control btn-primary a">
                <center><a href="index.php" >Back</a></center>
            </form>
        </div>
    </body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $Username = $_POST['username'];
        $Password = $_POST['password'];

        if($Username == 'admin123' &&  $Password == 'admin123' ){
            echo'<script>
                window.location = "Admin.php";
                </script>';
        }else{
            echo'<script>alert("Login Failed")</script>';
        }
    }
?>


<script>
    function changeImage() {
        var image = document.getElementById('passicon');

        var x = document.getElementById("floatingPassword");

        if (image.src.match("pictures/visibility.png")) {
            image.src = "pictures/nonvisibility.png";
            x.type = "text";
        }
        else {
            image.src = "pictures/visibility.png";
            x.type = "password";
        }
    }
</script>