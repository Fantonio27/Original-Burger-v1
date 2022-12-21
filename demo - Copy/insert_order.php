<?php
    session_start();

    include 'includes/db.php';

    if(isset($_GET['id']))   {  
      $id=$_GET['id'];
    }else{
        $id = $_SESSION['id'];
    }
    //echo"$id";
   

    $NAME = $_SESSION['fname'];
    $ADDRESS = $_SESSION['address'];
    $PHONE_NO = $_SESSION['phone'];
    $EMAIL_ADDRESS = $_SESSION['email'];
    $DELIVERY_DATE = $_SESSION['date'];
    $DELIVERY_TIME = $_SESSION['time'];
    $MESSAGE =  $_SESSION['message'];
    $USER_ID =$id;
    $STATUS =  'Pending';
    $PAYMENT= $_SESSION['payment'] ;

    if(isset($_POST['submit'])){

      $sql = "INSERT INTO orders ". "(NAME, ADDRESS, PHONE_NO, EMAIL_ADDRESS, DELIVERY_DATE, DELIVERY_TIME, MESSAGE, USER_ID, STATUS) ".
      "VALUES('$NAME','$ADDRESS','$PHONE_NO','$EMAIL_ADDRESS', '$DELIVERY_DATE', '$DELIVERY_TIME', '$MESSAGE','$USER_ID', '$STATUS' )";
      $result = mysqli_query($conn,$sql);

      if($result)
        {
          echo'<script>
          alert("Product is successfully added to your cart!"); 
          
          </script>;';
        }
        else
          {
            echo'<script>
          alert("Product is not added to your cart!"); 
          
          </script>;';
        }
      
      
      
  } 
?>
 <html>
    <head>
        <link rel="icon" href="pictures/22 (2).png" type="image/icon type">
        <title>Payment Checkout</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
      <form method="POST">
      <p class="p10">Order Summary</p>
       
       <div class="row">
         <table class="table table-striped">
           <thead>
             <tr>
               <th>Product</th>
               <th>Qty</th>
               <th>Price</th>
             </tr>
           </thead>
           <tbody>
             <?php                             
                $sql = "SELECT * FROM cart WHERE USER_ID = '$id'";
               $result = mysqli_query($conn,$sql);
                                                 
                if ($result->num_rows > 0) {
                   while($row = $result->fetch_assoc()) {
                   $NAME= $row["PRODUCT_NAME"];
                   $QTY= $row["QUANTITY"];   
                   $TOTAL= $row["TOTAL"];   
                                                       
              ?>
                 <tr>
                   <th style="width:180px;"><?=$NAME?></th>   
                   <th><?=$QTY?></th>
                   <th><?=$TOTAL?></th>
                                                       
                 </tr>
                                                         
                                                   
             <?php
                 } 
                   }         
                     else
                   {
                       echo "<h2> No Record Found </h5>";
                     }  
             ?>     
           </tbody>
         </table>
       </div>

       <hr class="hr1">
       <div class="row">
         <div class="col-xxl-6">
           <p class="p12">Purchaser</p>
             <p class="p13"><?php echo"$NAME"?></p>
             <p class="p13"><?=$ADDRESS?></p>
             <p class="p13"><?=$PHONE_NO?></p>
             <p class="p13"><?=$EMAIL_ADDRESS?></p>
         </div>
         <div class="col-xxl-6">
               <p class="p12">Delivery Date and Time</p>
               <p class="p13"><?=$DELIVERY_DATE?></p>
               <p class="p13"><?=$DELIVERY_TIME?></p>
               <p class="p12">Payment Method</p>
               <p class="p13"><?=$PAYMENT?></p>
         </div>
       </div>

       <p class="p14">message</p>
       <br>
         <center><input class="btn btn-primary" name="submit" value="Confirm Order"></center>
      </form>
  </body>
</html>