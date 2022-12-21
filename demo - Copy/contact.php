<?php

    session_start();
    include('includes/db.php');

    if(isset($_GET['id']))   {  
        $id=$_GET['id'];
    }else{
        $id = $_SESSION['id'];
    }
    //echo"$id";
?>

<html>
<head>
	<title>Contact</title>
	<link rel="icon" href="pictures/22 (2).png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<link href="contact.css" rel="stylesheet">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
	<style>
		body{
			overflow-x:hidden;
		}
		.bg1{
			background-image: url("pictures/bg13.jpg");
		}

		.navbar2{
            height: 114px;
            color: #760E0A;     
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

		#myheader{
            transition:0.2s;
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

		.bbox1{
			width: 100%;
			height: 500px;
			font-family: 'Source Sans Pro', sans-serif;
			font-size: max(4.5vw,50px);
			text-align: center;
			padding: 200px 20px 150px 20px ;
			color: white;
			background-color: rgba(0,0,0,.3);

		}

		 .lgn1{
                width:45px;
                height:45px;
                position:relative;
                top:10;
            }

            .lgn1:hover{
                color:#fdb833;
            }

			.bbox{
				background-color: white;
				margin-bottom: 10px;
				width: 90%;
				box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
				font-family: 'Open Sans', sans-serif;
				margin-left: 23px;
		}

		</style>
</head>
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
                                    	<a class="nav-link nv2" href="index.php?id=<?=$id?>">Home</a>
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
                                        <a class="nav-link nv1" href="contact.php?id=<?=$id?>">Contact</a>
                                    </li>
                                </ul>
                            </div>
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
		</div>

		<div class="n bg1">
			<div class="bbox1 tx">Contact Information</div>
		</div>

		<div class=" n bgcolor" style="height:100px;"></div>	
		
	<div class="row n bgcolor tx" >
		<div class="col-xxl-2"></div>
		<div class="col-xxl-3 n c">
			<div>
			    <div class="bbox"><img src="pictures/icons8-phone-100.png" class="pic"><b>0905 175 3575</b></div>
			</div>
			<div>
			   <div class="bbox"><img src="pictures/icons8-email-open-100.png" class="pic"><b>burgerqueen@gmail.com

</b></div>
			</div>
			<div>
			  <div class="bbox"><img src="pictures/icons8-address-100.png" class="pic"><b>Caloocan, 1400 Metro Manila</b></div>
			</div>	
			<div>
			   <div class="bbox"><img src="pictures/icons8-facebook-100.png" class="pic"><a href="https://www.facebook.com" class="a2"><b>Burger Queen</a></b>
			 </div>
			</div>
		</div>
		<div class="col-xxl-5 frm">
			<div class="form">
				<form class="">
				<p class="p22"><b>Send Message</b></p>
				<p class="p23"><b>Need to get in touch with us? Either fill out the form with your inquiry or find the contact information.</b></p>
				<div class="row n">
					<div class="col-6">
						First Name: <input type="text" placeholder="Input First Name" name="fname" class="txtbox">
						Last Name: <input type="text" placeholder="Input Last Name" name="lname" class="txtbox"><br>
					</div>
					<div class="col-6">
						Email Address: <input type="text" placeholder="Input Email Address" name="email" class="txtbox"><br>
						Phone Number: <input type="text" placeholder="Input Phone Number" name="phone" class="txtbox"><br>
					</div>
				</div>	
				<div class="row n">
					<div class="col-0">
					<textarea name="message" placeholder="Write your message here" rows="5"  class="txtbox"></textarea><br><br></div>
				</div>
				<input type="submit" value="   Send Message   " class="btn">
				</form>
			</div>
			<div class="col-xxl-2"></div>
		</div>
		<div class="col-xxl-1 n"></div>
	</div>
	
	<div class="row n bgcolor" style="height:100px"></div>

	<div class="row n bgcolor2" style="height:100px"></div>
	<div class="row n reveal">
		<div class="col-xxl-2"></div>
		<div class="col-xxl-8">
			<div class="row n">
				<div class="col-lg-0">
					<p class="p99">Find Us on Google Maps</p>
					<div class="contact_map text1">
			            <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d573.8176435130858!2d120.99074409659083!3d14.64631242196343!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x3397b67edbf91919%3A0x310dfbac5c92a195!2s70%209th%20St%2C%20East%20Grace%20Park%2C%20Manila%2C%20Metro%20Manila!3m2!1d14.646278299999999!2d120.99077279999999!5e0!3m2!1sen!2sph!4v1653210979771!5m2!1sen!2sph" 
			            style="border:0; height: 500px; box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			        </div>
				</div>
			</div>
		</div>
		<div class="col-xxl-2"></div>
	</div>

	<div class="row n " style="height:100px"></div>
	
	<?php 
		include 'includes/footer.php';	
	?>
	</div>
</body>
</html>

<script> 
	var nav = document.querySelector('nav');
		
	window.addEventListener('scroll', function(){
		if(window.pageYOffset > 100){
			nav.classList.add('bg-dark', 'shadow');
		}else{
			nav.classList.remove('bg-dark', 'shadow');
		}
		});
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

<script type="text/javascript">
    function reveal1() {
  var reveals = document.querySelectorAll(".reveal1");

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

window.addEventListener("scroll", reveal1);
</script>

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


<script>
	  function back() {
		alert("LOGIN/SIGN UP First!"); 
		window.location.href = "index.php";
	  }							
</script>
