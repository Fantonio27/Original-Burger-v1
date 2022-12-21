<?php

    session_start();
    include('includes/db.php');

    $code = $_GET['proid'];

    //echo"$code";

    if(isset($_GET['id']))   {  
        $id1=$_GET['id'];
    }else{
        $id1 = $_SESSION['id'];
    }

    include 'includes/insert_cart.php';
    //echo"$id1";   
    //echo"$code";
    $sql = "SELECT * FROM products WHERE id = '$code' ";
    $result = mysqli_query($conn,$sql);
                
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $price = $row['price'];
            $image = $row['image'];
            $Avail = $row['availability'];
            $id = $row['id'];
            $des = $row['description'];
            $Avail = $row['availability'];     

        }
    }

?>
<html>
    <head>
        <title><?php echo $name?></title>
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
            overflow-x:hidden;
        }

        .pic{
            width:60%;
            position: relative;
            top:100;
            margin-top:70px;
        }

        .bgcolor{
            background-color: #760E0A;
        }

        .box{
            width:90%;
            text-align: center;
          

        }

        .p1, .p2, .p3{
            color: #760E0A;
            font-size:35px;
            font-family: 'PT Serif', sans-serif; 
            font-weight:bold; 
        }
        .p2{
            font-size:22px;
            position:relative;
            bottom:15;
        }

        .p3{
            font-size:17px;
            margin-top:10px;
            font-family: 'Open Sans', sans-serif; 
        }

        .add{
            width:150px;
            height:43px;
            background-color: #760E0A;
            margin-top:30px;
            border-radius:50px;
            color:white;
            border:0px;
            font-family: 'Open Sans', sans-serif; 
            font-size:18px;
            font-weight:bold;
            letter-spacing:2px;
            transition:0.5s;
        }

        .add:hover{
            margin-top:15px;
        }

        .n{
            padding:0px;
        }

        a{
            text-decoration:none;
        }

        .btn{
            width:150px;
            height:43px;
            background-color: #760E0A;
            margin-top:30px;
            border-radius:50px;
            color:white;
            border:2px solid #FFF5E1;
            font-family: 'Open Sans', sans-serif; 
            font-size:18px;
            font-weight:bold;
            letter-spacing:2px;
            transition:0.5s;
            margin-left:30px;
        }

        .btn:hover{
            color:white;
            margin-top:20px;
        }

        @keyframes fade{
        0%   {opacity: 0;}
        100% {opacity: 1;}
      }

      .nv{
        animation-name: fade;
        animation-duration: 1s;
        animation-delay: 0s;
        transition: 0.3s;

      }

    </style>
    <body>
        <div class="row bgcolor">
            <div class="col-4">
                <a href="Menu.php?id=<?=$id1?>" class="btn">← Menu</a>
            </div>
            <div class="col-xxl-4 n nv">
                <center><img src="<?php echo"$image"?>" class="pic"></center>
            </div> 
            <div class="col-4"></div> 
        </div>

        <div class="row" style="height:130px"></div>
        <div class="row">
            <div class="col-0 n nv" >
                <center><p class="p1"><?php echo"$name"?></p>
                <p class="p2">₱ <?php echo"$price"?></center></p>
            </div>
        </div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-xxl-4 nv">
                <center><div class="box"><p class="p3">
                <?php echo"$des"?><!--Features ¼ lb*. of flame-grilled beef with avocado spread, 
                crispy bacon, seasoned tortilla strips, American cheese, 
                crisp lettuce, sliced white onions, juicy tomatoes, and creamy 
                spicy sauce on a toasted sesame seed bun. (*Based on pre-cooked patty weight)--></p></div></center>
                <form method="post">
                    
                    <input type='hidden' name='code' value='<?php 
                    echo"$code" ?>'/>
                    <input type='hidden' name='pname' value='<?php echo"$name"?>'/>
                
                    <center><input type="submit" name="send" value="+ ADD" class="add nv"></center>           
                </form>
            </div>
           
            <div class="col-4"></div>
        </div>
        <div class="row" style="height:50px;"></div>
    </body>
</html>