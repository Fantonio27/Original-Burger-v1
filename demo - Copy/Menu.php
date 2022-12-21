<?php

    session_start();
    include('includes/db.php');
    $id = $_SESSION['id'];
    
    if(isset($_GET['id']))   {  
        $id=$_GET['id'];
    }else{
        $id = $_SESSION['id'];
    }

    include('includes/count.php');
    
    //echo"$id";
?>
<html>
    <head>
        <title>Menu Page</title>
        <link rel="icon" href="pictures/22 (2).png" type="image/icon type">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    </head>
    <style>
        body{
            background-color: #FFF5E1;
        }

        .navbar2{
            height: 114px;
            color: #760E0A;     
        }

        .lgn{
            height:44px;
            width:130px;
            float:right;
            margin-top:15px;
            border-radius:30px;
            border:2px solid #fdb833;
            color:#fdb833;
            font-family: 'PT Serif', sans-serif;
            letter-spacing:2px;
            font-size: 18px;
            font-weight: bold;  
            margin-right:16px;
            background-color:rgba(255,255,255,0);
            transition: 0.5s;
        }

        .lgn:hover{
            background-color:#fdb833;
            color:black;
        }

        .nv1, .nv2{
            font-family: 'PT Serif', sans-serif;                
            font-size: 21px;
            color: #fdb833;
            font-weight:bold;
            margin-right: 30px;
            text-align:left;
            letter-spacing:1.5px;
            transition: 0.3s ;
            margin-top:15px;
        }

        .nv2:hover{
            color:#fdb833;
        } 

        .nv1:hover{
            color:#fdb833;
        } 

        .nv2{
            color: white;
            border-bottom: 2px solid rgba(255,255,255,0);
            margin-left:0px;

        }

        .pic1{
            width: 130px;
            height: auto;
            object-fit: cover;
            margin-left: ;                 
        }

        .n{
            padding:0px;
        }

        .bgimg{
            height: 500px;
            background-image: url("pictures/pic12.jpg");
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;	
            background-position: 4% 96%;   
            
        }

        .w{
            background-color:red;
        }

        .box{
            background-color:rgba(1,42,74,.3);
            width:100%;
            height: 500px;
        }

        .box1{
            width:100%;
            height:auto;
            padding:10px;
        }

        .p33{
            font-family: 'Inter', sans-serif;
            font-size: max(4.5vw,50px);
            color: white;
            font-weight:bold;
            margin-top:180px;
            text-align:center;
            letter-spacing: 10px;
        }

        .pic2{
            width: 100%;
            height: auto;
            position: relative;
            object-fit: contain;
            margin-top: 20px;
        }

        .box2{
            width: 100%;
            background-color: ;
            padding:20px;
            height:auto;
        }

        .p34{
            font-size: 45px;
            color:#ff9500;
            font-family: 'Inter', sans-serif;
            font-weight:bold;
            margin-top:10px;
        }

        .p35{
            font-size: 19px;
            color:#252422;
            font-family: 'Open Sans', sans-serif;
            font-weight:bold;
            position:relative;
            bottom:12;
        }

        .pointer {
            width: 150px;
            height: 40px;
            position: relative;
            background: #CB3737;
            margin-top:20px;
            position:relative;
            top:10;
        }
        .pointer:after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 0;
            border-left: 20px solid #FFF5E1;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
        }
        .pointer:before {
            content: "";
            position: absolute;
            right: -20px;
            bottom: 0;
            width: 0;
            height: 0;
            border-left: 20px solid #CB3737;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
        }

        .p8{
            font-size: 22px;
            font-family: 'PT Serif', sans-serif;        
            color: white;
            margin: 0px 0px 0px 32px;
            top:3;
            position:relative;
	    }

        #myheader{
            transition:0.2s;
        }

        .bgimg2, .bgimg3{
            background-image: url("pictures/pic10.jpg");
            background-size: cover;
            background-attachment: ;
            background-position:bottom;
        }

        .bgimg3{
            background-image: url("pictures/pic14.jpg");
            background-position:35% 65%;
        }

        .p16{
            font-size: 20px;
            font-family: 'PT Serif', sans-serif;   
            color: #760E0A;
            text-align: center
	    }

        .p1{
            font-size: 50px;
            font-family: 'Inter', sans-serif;
            color: #203239;
            text-align: center;
            letter-spacing:2px;
            position:relative;
            bottom:21;
	    }

        .pics{
            width:190px;
            height:170px;

        }

        .p2{
            font-family: 'Inter', sans-serif;
            font-size: 20px;
            color: #760E0A;
            margin: 15px 0px 0px 0px ;
            text-align: center;
        }

        .p3{
            font-family: Arial;
            font-size: 18px;
            color:#203239 ;
            margin: 5px 10px 10px 0px ;
            text-align: center;
        }

       

        .cart_div{
            height:25px;
            width:25px; 
            background-color:#fdb833;
            border-radius:50px;
            position:absolute;
            top:45;
            right:6;
        }

        a{
            text-decoration:none;
        }

        .cart{
            width:43px;
            height:43px;
            margin-top:12px;
        }

        .smbox{
            border:2px solid rgba(0,0,0,0);
            border-radius:20px;
            transition:0.5s;
            cursor: pointer;
            width:300px;
            background-color:rgba(0,0,0,0); 
            padding-top:30px;
            padding-bottom:30px;
            height:270px;

        }

        .smbox:hover{
            border:2px solid rgba(255,149,0,0.5);
            border-radius:20px;
            background-color: rgba(255,149,0,0.2) ;
            
        }

        .boxx1{
            width:100%;
            background-color: rgba(0,0,0,0.3) ;
            height:;
            padding:260px 100px 100px 60px ;
        }

        .p40{
            font-size:20px;
            color:#fdb833;
            font-family: 'Inter', sans-serif;
            font-weight:bold; 
            position:relative;
            top:23;  
        }

        .p41{
            font-size:40px;
            color:white;
            font-family: 'PT Serif ', sans-serif;
            font-weight:bold;      
        }

        .p42{
            font-size:21px;
            color:white;
            font-family: 'Open Sans ', sans-serif;     
        }

        .p43, .p44{
            font-size:20px;
            color:#760E0A;
            font-family: 'PT Serif', sans-serif;
            font-weight:bold;    
        }

        .p44{
            font-weight:lighter;
            font-size:18px;
            color:#252422;
            font-family: 'Open Sans ', sans-serif;     
        }

        .lgn1{
                width:45px;
                height:45px;
                position:relative;
                top:10;
                left:10;
            }

            .lgn1:hover{
                color:#fdb833;
            }

            .proimg{
                width:200px;
                height:170px;
            }

            .probox{
                background-color:red;
                height:200px;
                width:270px;
                float:left;
            }

            .w1{
                background-color: blue;
            }

            .pp2{
                text-align:center;
                color:red;
                font-weight:bold;
                font-size:18px;
                font-family: 'PT Serif', sans-serif;
            }

      
        

    </style>
    <body>
        <div class="container-fluid">
            <div class="row fixed-top" id="myHeader">
                <div class="col-1"></div>
                <div class="col-xxl-1 col-md-0">
                    <center><img src="pictures/22 (2).png" class="pic1"></center>
                </div>
                <div class="col-xxl-9">
                    <nav class="navbar navbar2 navbar-expand-lg n ">
                        <div class="container-fluid">         
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                                <div><img src="pictures/navbaricon.png"></div>
                            </button>
                            <div class="collapse navbar-collapse " id="navbarSupportedContent">  
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link nv2" href="index.php?id=<?= $id?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nv2" href="About_us.php?id=<?=$id?>">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nv1" href="Menu.php?id=<?=$id?>">Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nv2" href="contact.php?id=<?=$id?>">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        
                            <a href="Add_Cart.php?id=<?=$id?>">
                                <div class="btn position-relative ">
                                    <img src="pictures/cart.png" class="cart">
                                    <span class="position-absolute ">
                                            <div class="cart_div">
                                                <a href="Add_Cart.php?id=<?=$id?>" style="color:black; font-weight:bold;">     
                                                    <span>
                                                        <?php 
                                                            $count=$_SESSION['count'];
                                                            echo $count; ?>
                                                    </span>
                                                </a>
                                            </div>
                                    </span>
                                </div>   
                            </a>

                            <?php
                                        if(empty($id)){
                                            echo' ';
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

            <div class="row bgimg">
                <div class="box">
                    <div class="row">
                        <div class="col-5"></div>
                        <div class="col-xx-2">
                            <div class="box1">
                                <p class="p33">MENU</p>
                            </div>   
                        </div>
                        <div class="col-5"></div>
                    </div>
                </div>
            </div> 

            <div class="row" style="height:100px;"></div>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-xxl-4">
                    <div class="box2">
                        <div class="pointer">
                            <p class="p8">New Offer</p>
                        </div>
                        <p class="p34">Single Decker</p>
                        <p class="p35">The new Single Decker features two slices
                        of toast, layered with ¼. lb of flame-grilled
                        beef, melty American cheese, caramelized
                        onions and stacker sauce.</p>
                        <p class="p43">Nutritional Information</p>
                        <p class="p44">- Calories: 429.9 kcal</p>
                        <p class="p44">- Fat: 31.5 g</p>
                        <p class="p44">- Proteins: 13.9 g</p>
                    </div>  
                </div>
                <div class="col-xxl-4">
                    <img src="pictures/b2.png" class="pic2">
                </div>
                <div class="col-2"></div>
            </div> 

            <div class="row" style="height:100px;"></div>

            <div class="row "  style="height:;">
                <div class="col-xxl-6 n bgimg2 ">
                    <div class="boxx1 ">
                        <p class="p40">Comming Soon</p>
                        <p class="p41">Single Quarter Pound King</p>
                        <p class="p42">Our Quarter Pound KING™ Sandwich has over ¼ lb.* of flame-grilled 100% beef, topped with all of our classic favorites</p>
                    </div>
                </div>
                <div class="col-xxl-6 n bgimg3">
                    <div class="boxx1 ">
                        <p class="p40">Comming Soon</p>
                        <p class="p41">Ch'King Sandwich</p>
                        <p class="p42">Crispy white meat breast fillet topped with savory sauce, lettuce and juicy tomatoes on a toasted potato bun.</p>
                    </div>
                </div>
            </div> 

            <div class="row" style="height:100px;"></div>
                    
            <!--ROW 1 -->
            <div class="row">
                <div class="col-2"></div>
                <div class="col-xxl-8">
                    <p class="p16"><b><?php echo $_SESSION['procount']?> Different Burgers</b></p>
                    <p class="p1"><b>Burger Menu</b></p>
                    <div class="row">   
                        <div class="col-xxl-1"></div>
                        <div class="col-xxl-10">
                            <div class="row">
                                  <?php
                                    $sql = "SELECT * FROM products";
                                    $result = mysqli_query($conn,$sql);
                                                
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $rowcount=mysqli_num_rows($result);
                                            $_SESSION['procount']=$rowcount;
                                            $proid = $row['id'];
                                            $proname = $row['name'];
                                            $proprice = $row['price'];
                                            $proimage = $row['image'];    
                                            $avail = $row['availability']  ;

                                            if($avail == 'YES'){
                                                $avail = '';
                                            }else{
                                                $avail = 'Not Available';
                                            }
                                    ?>
                                    <div class="col-xxl-4">
                                        <form method='post' action=''>
                                            <a href="product.php?id=<?=$id?>&proid=<?=$proid?>" name="enter">
                                                <input type='hidden' name='code' value='<?php echo"$proid"?>'/>
                                                <center><img src=<?php echo $proimage?> class="proimg">
                                                <p class="p2"><?php echo $proname?></p></center>
                                                <p class="pp2"><?php echo $avail?></p></center>
                                            </a>
                                        </form>
                                    </div>

                                    <?php 
                                        }
                                    }else{
                                        echo"<script>alert('error')</script>";
                                    }

                                    if(isset($_POST['enter'])){
                                        //$_SESSION['proid']=$_POST['code'];  
                                        
                                        //$procount = $_SESSION['procount'];
                                    }
                                    //include('includes/procount.php');
                                ?>
                            </div>  
                        </div>
                        <div class="col-xxl-1"></div>
                    </div>
            </div>
            
            <div class="row n " style="height:100px; width:100%;"></div>

            <?php
                include 'includes/footer.php';
            ?>
        </div>
    </body>
</html>

<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add('bg-dark', 'shadow');
    } else {
        header.classList.remove('bg-dark', 'shadow');
    }
    }
</script>

<script type="text/javascript">
    function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
</script>

<script>
    var up = 'product.php'
    var url = new URL("product.php");
    up.innerHTML = url;
    var down = document.getElementById('GFG_DOWN');
              
    function GFG_Fun() {
        url.searchParams.set('id', '10');
        down.innerHTML = url;
    }
</script> 