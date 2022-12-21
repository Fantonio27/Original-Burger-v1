<?php 
    include "includes/db.php";

    session_start();

    if(isset($_GET['id']))  {  
        $id=$_GET['id'];
    }else{
        $id = $_SESSION['id'];
    }

    if(isset($_GET['admin'])){
        $admin=$_GET['admin'];
        if($admin=='0123'){
            echo'<script>
            alert("Login Successful!, Welcome to Admin Panel"); 
            window.location.href = "Adminform.php";
            </script>';
        }
    }
    //echo"$id";
?>
<html>
    <head>
        <title>Home Page</title>
        <link rel="icon" href="pictures/22 (2).png" type="image/icon type">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
        <link rel='stylesheet' href="index.css" type='text/css' media='all'>
    </head>
        <style>
            .lgn1{
                float:right;
                width:45px;
                height:45px;
                position:relative;
                top:10;
            }

            .lgn1:hover{
                color:#fdb833;
            }

            a{
                text-decoration:none;
            }

            a:hover{
                color:black;
            }

            .orderbtn{
                color:black;
                padding:9px 23px;
                width:140px;
            }

            .orderbtn:hover{
                color:black;
            }

        </style>
        <body>
            <div class="container-fluid">
                <div class="row fixed-top">
                    <div class="col-1"></div>
                    <div class="col-xxl-1 col-md-0">
                        <a href="index.php?admin="><center><img src="pictures/22 (2).png" class="pic1"></center></a>
                    </div>
                    <div class="col-xxl-9">
                        <nav class="navbar navbar2 navbar-expand-lg n">
                            <div class="container-fluid">         
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                                   <div><img src="pictures/navbaricon.png"></div>
                                </button>
                                <div class="collapse navbar-collapse " id="navbarSupportedContent">  
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link nv1" href="index.php?id=<?=$id?>">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link nv2" href="About_us.php?id=<?=$id?>">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <?php
                                            if(empty($id)){?>
                                                <a class="nav-link nv2" href="Menu.php?id=">Menu</a><?php
                                            }else{
												?>
                                                <a class="nav-link nv2" href="Menu.php?id=<?=$id?>">Menu</a>
                                        	<?php }?> 
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link nv2" href="contact.php?id=<?=$id?>">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                    <?php
                                        if(empty($id)){
                                            echo' <a class="btn lgn" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Login</a>';
                                        }else{
                                            $sql = "SELECT * FROM user WHERE USER_ID = '$id'";
                                            $query_run = mysqli_query($conn, $sql); 

                                            if ($query_run->num_rows > 0) {
                                                while($row = $query_run->fetch_assoc()) {
                                                $name = $row["USERNAME"];
                                                }

                                                echo"<a href='userform.php?id=$id'><img src='pictures/user.png' class='lgn1'></a>";
                                            }
                                        }
                                    ?>                         
                            </div>
                        </nav>
                    </div>
                    <div class="col-xxl-1"></div>          
                </div> 
            
               <?php include 'includes/modal.php';?>
                
                <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="border-radius:20px ; box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px; 
                        border:0px; background-color: #FFF5E1;">
                            <div class="modal-body" style="padding:0px; height:615px;">
                                <div class="row">
                                <div id="liveAlertPlaceholder"></div>
                                    <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
                                </div>

                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row bgimg">
                    <div class="box">
                        <div class="row">
                            <div class="col-xxl-1"></div>
                            <div class="col-xxl-4 col-md-5">
                                <div class="box1">
                                    <p class="p33">The best classic burger you will ever find!</p>
                                    <p class="p34">FRESH & DELICIOUSS<br></p>
                                    <p class="p35">Capture the most unique and delicious burgers which you will fell in every bites,
                                    the test you cannot forget for years. Check out our various categories. We mode fresh and healthy 
                                    burgers with our own different secret ingredients.</p>
                                    <?php
                                        if(empty($id)){?>
                                            <button class="nav-link orderbtn" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Order Now</button><?php
                                        }else{
											?>
                                            <a class="nav-link orderbtn" href="Menu.php?id=<?=$id?>">Order Now</a>
                                        <?php }?> 
                                </div>   
                            </div>
                            <div class="col-xxl-5"></div>
                            <div class="col-xxl-2"></div>
                        </div>
                    </div>    
                </div>
            </div>
        </body>

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

<script>
    let text = "";

    for (let i = 0; i < 6; i++) {
        text+=Math.floor(Math.random() * 10);
    }

    document.getElementById("code").value = text;
</script>

<script>
    let text1 = "";

    for (let i = 0; i < 5; i++) {
        text1+=Math.floor(Math.random() * 10);
    }

    document.getElementById("prodno").value = "prodno_"+text1;
</script>

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

   
