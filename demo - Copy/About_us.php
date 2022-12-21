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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="pictures/22 (2).png" type="image/icon type">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="About_us.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">

  	<style>
		
  	</style>
</head>
<body>
	<div class="container-fluid">
	<div class="row fixed-top" id="myHeader" style="transition:0.2s;">
            <div class="col-1"></div>
                <div class="col-xxl-1 col-md-0">
                    <center><img src="pictures/22 (2).png" class="ppic1"></center>
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
                                        <a class="nav-link nv1" href="About_us.php?id=<?=$id?>">About</a>
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
		<div class="row n">
			<div class="col-0 md bg n" style="padding: 0px;">
				<div class="box55 tx">Home Page
				</div>
			</div>
		</div>
		<div class="row n bgcolor1" style="height: 100px;"></div>
		<div class="row n bgcolor2">
			<div class="col-xxl-2"></div>
			<div class="col-xxl-8">
				<div class="container tx">
					<div class="row ">
						<div class="col-lg-0 border border-0 n">
							<div class="box10">
								<p class="p1">Mission</p><b>Our Mission is to exceed the customer expectation consistently through commitment and innovation and in harmony with the environment. We are committed to serving our customers the highest quality of tasty burger products in the market. In order to be a sustainable business, we must do this efficiently and profitably. To accomplish this mission, every one of our employees must be a member of our Quality Assurance Team and make it our top priority. We will be able to provide our employees with long-term, rewarding careers while building mutually beneficial partnerships with our customers if we maintain consistent quality and efficient operations.</b>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-2"></div>
		</div>
		<div class="row n bgcolor2" style="height: 100px;"></div>
		<div class="row n bgcolor" style="height: 100px;"></div>
		<div class="row n bgcolor" >
			<div class="col-xxl-2"></div>
			<div class="col-xxl-8  border border-0 n">
				<div class="container reveal">
					<div class="row n">
						<div class="col-lg-4 pad" >
							<center>
								<b style="color:#fb8351"><p class="p2">Purpose</p><p class="p12"></b>Burger Queen launched their online store to provide customers an easy way to order their products online via Facebook, Instagram and SMS, rather than going to physical store.</p></center>
						</div>
						<div class="col-lg-4 pad" style="border:0px ;">
							<center>
									<b style="color:#fb8351"><p class="p2">Objective</p><p class="p12"></b> Our main objectives is serving quality and affordable meals. We want to offer tasty burger meals, that are still affordable to our customer needs.</p></center>
						</div></center>
						<div class="col-lg-4 pad">
							<center>
									<b style="color:#fb8351"><p class="p2">Goals</p><p class="p12"></b> - Increasing Sales and Profits<br>- Building a Loyal Customer Base<br>- Have Customer Satisfaction</p></center>
						</div></center>
					</div>
				</div>
			</div>
			<div class="col-xxl-2"></div>
		</div>
		<div class="row n bgcolor" style="height: 100px;"></div>
		<div class="row n bgcolor1" style="height: 130px;"></div>
		<div class="row n bgcolor2">
			<div class="col-xxl-2"></div>
			<div class="col-xxl-8">
				<div class="container reveal">
					<div class="row n">
						<div class="col-lg-6 border border-0 n bgcolor">
							<div class="bbbox">
								<p class="pp15">History</p><b>The company is established by University of the East-Caloocan Studen in 2021serving in the market for 1 year. Established their physical store at Samson Road, Caloocan City up until in the present. Burger Queen launched their online store in Facebook and Instagram year of 2021. Serving different variety of fast food meal.</b>
							</div>
						</div>
						<div class="col-lg-6 border border-0 n bg0">
							<div class="bbbox" style="opacity: 0;">
								<p class="pp15">Overview</p><b>The company is established by University of the East-Caloocan Studen in 2021serving in the market for 1 year. Established their physical store at Samson Road, Caloocan City up until in the present. Burger Queen launched their online store in Facebook and Instagram year of 2021. Serving different variety of fast food meal.</b>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-2"></div>
		</div>
		<div class="row n bgcolor2" style="height: 130px;"></div>
		<div class="row n bg1">
			<div class="col-xxl-3"></div>
			<div class="col-xxl-6">
				<div class="container reveal1">
					<div class="row n">
						<div class="col-lg-0 border border-0 n">
							<div class="bigbox">
								<p class="p4" style="font-size: max(2vw, 28px);"><b>Environment</b></p>
								Employee Satisfaction Retain employees by providing them with more than just basic training and encouraging them to provide useful information to customers – as well as developing their sales skills. The employee can assist her with making the best selection. Give recognition and bonuses to employees who consistently go out of their way to provide superior customer service.

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-3"></div>
		</div>

		<?php
			include 'includes/footer.php';
		?>	
	</div>
</body>
</html>
	

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
