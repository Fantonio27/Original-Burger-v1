<?php
 session_start();
include 'includes/db.php';

if(isset($_GET['id']))   {  
    $id=$_GET['id'];
}else{
    $id = $_SESSION['id'];
}

$id = $_SESSION['usid'];
//echo"$id";


include 'includes/fetch.php';

//echo"$address";
?>

<html>
    <head>
        
        <title>Payment Checkout</title>
        <link rel="icon" href="pictures/22 (2).png" type="image/icon type">
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

        .bgcolor{background-color:white;}

        .box{
            padding:80px 60px;
            margin:10px;
        }

        .p1{
            font-size:24px;
            font-family: 'Inter ', sans-serif;
            color:#760E0A;
            margin-bottom:20px;
        }

        .txtbox1, .txtbox2{
            float:;
            width:100%;
            margin-right:10px;
            margin-bottom:15px;
        }

        .txtbox2{
            height:100px;
        }

        .txtbox{
            width:98%;
            margin-bottom:10px;
        }

        .Label{
            color:gray;
            margin-bottom:5px;
        }

        .pic{
            height:130px;
            width:130px;
        }

        .sbox{
            background-color:#f8f9fa;

        }

        .dt{
            display:block;
            width:100%;
            margin-top:10px;
        }

        .submit{
            width:200px;
            margin-top:60px;
            height:40px;
        }

        .p{
            padding:40px;
        }

        .p10{
            font-size:30px;
            text-align:center;
        }

        .hr1{
            opacity:0.3;
            margin-bottom:20px;
            position:relative;
            bottom:10;
            
        }

        .p12{
            font-weight: bold;
        }

        .button{
            width:160px;
            margin-top:40px;
           
        }

        .pp13{
            font-size:21px;
            position:relative;
            bottom:50;
            font-weight:bold;
            font-family: 'Inter', sans-serif;
        }
        
        a{
            text-decoration:none;
        }

        .p21{
            font-size:23px;
            position:relative;
            top:20;
            
        }

        .p22{
            float:left;
           
        }
        .p23{
            float:right;
            position:relative;
            top:15;
        }

        .p25{
            font-family: 'Inter', sans-serif;
            font-size:18px;
            float:right;
        }
 
    </style>
    <body>
        <div class="container-fluid">
            <div class="row" style="height:50px;"></div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-xxl-6 ">
                    <div class="box bgcolor">
                        <a href="Add_cart.php?id=<?=$id?>"class="pp13"><font size="6">← </font>Back</a>
                        <p class="p1">Customer Information</p>
                        <hr class="hr1">
                        <form method="POST">
                            <div class="row">
                                <div class="col-xxl-6">
                                        <input type="text" class="form-control txtbox1" placeholder="First Name" name="FirstName"
                                        minlength="2" maxlength="20" pattern="[a-zA-Z- ]{1,}" title="Letters only" value="<?=$firstname?>" required>                                       
                                </div>
                                <div class="col-xxl-6">
                                    <input type="text" class="form-control txtbox1" placeholder="Last Name"  name="LastName"
                                    minlength="2" maxlength="20" pattern="[a-zA-Z- ]{1,}" title="Letters only" value="<?=$lastname?>" required>
                                </div>
                            </div>
                            <input type="text" class="form-control txtbox1" placeholder="Region, Province, City, Barangay"
                             maxlength="80" name="address" value="<?=$address?>" required>

                            <input type="text" class="form-control txtbox1" placeholder="Phone No"
                            minlength="11" maxlength="12" name="phone" onkeypress="return onlyNumberKey(event)" value="<?=$phone?>" required>

                            <input type="text" class="form-control txtbox1" placeholder="Email Address"
                            minlength="9" maxlength="30" pattern="[a-zA-Z-z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$" 
                            title="must contain a dot sign, add at least 2 letters." 
                            name="email" value="<?=$email?>" required>
                                                      
                            <p class="p1"><br>Delivery Date & Time</p>
                            <hr class="hr1">
                                    
                            <input type="radio" name="order" style="cursor:pointer;" onclick="hideunhide()" id="now" 
                            value="now" required> Order Now
                            <input type="radio" name="order" style="margin-left:25px; cursor:pointer;" id="later"
                            onclick="hideunhide()"value="later" required> Order Later    

                                <div class="row">
                                    <div class="col-4">
                                        <input type ="date" class="form-control dt" 
                                            max="2022-12-31" id="date" name="deliverydate" required>
                                           <input type="hidden" id="date1" name="date1">
                                        <input type="hidden" id = "date2" name="date2">
                                                                   
                                    </div>
                                    <div class="col-3">
                                        <input type="text" id="time1" name="time1" hidden> 
                                        <input type ="time" class="form-control dt" id="time"
                                        min="09:00" max="18:00" name="time" required>
                                    </div>
                                    <div class="col-6"></div>
                                </div>
                                

                            <p class="p1"><br>Payment Method</p>
                            <hr class="hr1">
                            <input type="radio" id="paymentmethod" name="paymentmethod" value="Cash on Delivery" checked >
                            <label for="paymentmethod">Cash on Delivery</label><br>

                           <!-- <input type="text" class="form-control txtbox1" placeholder="Message" onkeypress="return onlyNumberKey(event)"
                            minlength="4" maxlength="5" name="address1" required>-->

                            <input type="submit" class="btn btn-primary button"
                            value="placeorder" name="placeorder">   
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="box bgcolor">
                            <p class="p1">Summary</p>
                            <table class="table"style="border:1px solid white " >
                                <thead>
                                <tbody>
                                    <?php    
                                     $status = '0';                          
                                            $sql = "SELECT * FROM cart WHERE USER_ID = '$id' AND ORDER_NO = '$status'";
                                            $result = mysqli_query($conn,$sql);
                                            
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    $IMG= $row["IMAGE"];
                                                    $NAME= $row["PRODUCT_NAME"];
                                                    $QTY= $row["QUANTITY"];   
                                                    $TOTAL= $row["TOTAL"];   
                                                    
                                                    ?>
                                                    <tr>
                                                        <th rowspan="3" style="width:140px;"><center><img src="<?php echo"$IMG"?>" class="pic"></center></th>
                                                        <th rowspan="2" style="width:200px;" valign="bottom"><p class="p21"><?=$NAME?></p></th>   
                                                        <th></th>
                                                    </tr>
                    
                                                    <tr>
                                                        <th valign="bottom"><p class="p23">QTY: <?=$QTY?></p></th>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <th><p class="p22">₱ <?=$TOTAL?></p></th>
                                                        <th><p style="color:white">ddd</p></th> 
                                                    </tr>
                                        
                                                    
                                                
                                                    <?php
                                                } 
                                            }         
                                            else
                                            {
                                                echo "<h2> No Record Found </h5>";
                                            }  
                                    ?>   
                                    </thead>   
                                </tbody>
                            </table>
                            <hr>
                            <?php
                                $status = '0'; 
                                $sql = "SELECT SUM(TOTAL) FROM cart WHERE USER_ID = '$id' AND ORDER_NO = '$status'";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_array($result);

                                echo '<p class="p25">Sum: ₱ ' . $row[0]."</p>";
                                $total = $row[0];
                                $_SESSION['total'] = $row[0];

                                include 'includes/pass.php';
                            ?>
                    </div>
                    </form>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row" style="height:100px;"></div>
        </div>
    </body>
</html>


<script>
function hideunhide() {
  const date = new Date();
  var time = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
  document.getElementById("time").value = time;
  document.getElementById("time1").value = time;

  var currentDate = date.toISOString().substring(0,10);
  var currentTime = date.toISOString().substring(11,16);

  document.getElementById("date").value = currentDate;
  document.getElementById("date1").value = currentDate;
  document.getElementById("date2").value = currentDate;
  document.getElementById("date").min = currentDate;

  var x = document.getElementById("date");
  var x1 = document.getElementById("time");

  var y = document.getElementById("now");
  var z = document.getElementById("later");

  if (z.checked) {
    x1.disabled = false;
    x.disabled = false;
    x1.value="";
    x.type="text";
  } 
  else if(y.checked) {
    x1.disabled = true;
    x.disabled = true;
    x.type="date";
    
  }
}

</script>

<script>
    function onlyNumberKey(evt) {
        
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>

