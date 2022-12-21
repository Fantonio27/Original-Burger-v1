<?php
 session_start();
include 'includes/db.php';

$id = $_SESSION['id'];

$sql = "SELECT * FROM orders WHERE USER_ID = '$id'";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $_SESSION['ordno'] = $row['ORDER_NO'];
}}

    include 'includes/pass.php';

    if(isset($_GET['id']))   {  
        $id=$_GET['id'];
    }
?>

<html>
    <head>
        <title>Receipt</title>
        <link rel="icon" href="pictures/22 (2).png" type="image/icon type">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <style>
        body{
            background-color:#FFF5E1;
            padding:100px;
        }

        .box{
            width:1100px;
            height:;
            background-color:white;
            margin:auto;
            box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
            padding-top:100px;
            padding-bottom:100px;
            padding-left:80px;
            padding-right:80px;
        }

        .div1{
            height:50px;
            padding-top:10px;
            padding-left:10px;
            width:100%;
            background-color:#f4a261;
            color:white;
            margin-bottom:30px;
        }

        .title{
            font-size:40px;
            font-family: 'Oswald', sans-serif;
            letter-spacing:2px;
            margin-bottom:40px;
        }

        .clienttext2{
            float:right;
            position:relative;
            top:25;
            right:120;
        }

        .clienttext, .clienttext2{
            font-family: 'Roboto', sans-serif;
            margin-left:10px;
            color:#003049;
        }

        .clienttext1{
            font-weight:bold;
            font-family: 'Noto Sans JP', sans-serif;
            font-size:20px;
            
        }

        .pic{
            height:130px;
            width:150px;
            float:left;
            margin-right:20px;
        }

        .btn-close{
            float:right;
            position:relative;
            bottom:70;
            left:50;
        }


    </style>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-2"></div>
                <div class="col-xxl-8">
                    <div class="box">
                    <a href="Menu.php?id=<?php echo$id?>"><button type="button" class="btn-close" aria-label="Close"></button></a>
                        <img src="pictures/22 (1).png" class="pic"><br><br>
                        <p class="clienttext2">Date:&nbsp;&nbsp;&nbsp;<?=$datenow?></p>
                        <p class="title">Invoice Receipt</p>
                        <div class="div1"><p class="clienttext1">Customer Information</p></div>
                        <div class="clientbox">
                            <div class="row">
                                <div class="col-xxl-2">
                                    <p class="clienttext"><b>NAME: </b></p>
                                    <p class="clienttext"><b>EMAIL ADDRESS: </b></p>
                                    <p class="clienttext"><b>ADDRESS: </b></p>
                                    <p class="clienttext"><b>PHONE NUMBER: </b></p>
                                </div>
                                <div class="col-xxl-4">
                                    <p class="clienttext">&nbsp;&nbsp;&nbsp;<?=$FULLNAME?></p>
                                    <p class="clienttext">&nbsp;&nbsp;&nbsp;<?=$ADDRESS?> </p>
                                    <p class="clienttext">&nbsp;&nbsp;&nbsp;<?=$EMAIL_ADDRESS?> </p>
                                    <p class="clienttext">&nbsp;&nbsp;&nbsp;<?=$PHONE_NO?></p>
                                </div>
                                <div class="col-xxl-2">
                                    <p class="clienttext"><b>DELIVERY DATE: </b></p>
                                    <p class="clienttext"><b>DELIVERY TIME: </b></p>
                                    <p class="clienttext"><b>PAYMENT METHOD: </b></p>
                                </div>
                                <div class="col-xxl-4">
                                    <p class="clienttext">&nbsp;&nbsp;&nbsp;<?=$DELIVERY_DATE?></p>
                                    <p class="clienttext">&nbsp;&nbsp;&nbsp;<?=$DELIVERY_TIME?></p>
                                    <p class="clienttext">&nbsp;&nbsp;&nbsp;<?=$PAYMENT?></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <table class="table  table-hover table-bordered">
                            <thead>
                                <tr class="table-warning" style="padding:50px">
                                <th width="500px"><center>Product Name</center></th>
                                <th><center>Qty</center></th>
                                <th><center>Price</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php   
                                    $sql = "SELECT * FROM orders ORDER BY ORDER_NO DESC
                                    LIMIT 1;";
                                    $result = mysqli_query($conn,$sql);
                    
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                        $_SESSION['ordno'] = $row['ORDER_NO'];
                    
                                        $ORDNO=$_SESSION['ordno'];     
                                        }
                                    }
                                    echo$ORDNO;
                                    $total = $_SESSION['total'];
                                    $status = $_SESSION['ordno'];
                                   
                                    $sql = "SELECT * FROM cart WHERE USER_ID = '$id' AND ORDER_NO = '$ORDNO'";
                                    $result = mysqli_query($conn,$sql);

                                    if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                    $NAME= $row["PRODUCT_NAME"];
                                    $QTY= $row["QUANTITY"];   
                                    $TOTAL= $row["TOTAL"];   
                                                               
                                ?>
                                    <tr>
                                    <th><center><?=$NAME?></center></th>   
                                    <th><center><?=$QTY?></center></th>
                                    <th><center><?=$TOTAL?></center></th>
                                                                        
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
                            <?php

                               $sql = "SELECT SUM(TOTAL) FROM cart WHERE USER_ID = '$id' ";
                               $result = mysqli_query($conn,$sql);
                               $row = mysqli_fetch_array($result);
                                
                               //echo '<p class="p25">Sum: ₱ ' . $row[0]."</p>";
                               $total = $row[0];
                               $_SESSION['total'] = $row[0];
                            ?>
                            <div class="row">
                                <div class="col-xxl-9"></div>
                                <div class="col-xxl-3">
                                    <center><p style="margin:0px; font-size:18px;" class="clienttext" ><b>Total: ₱ <?php echo"$total"?></p></b></center>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-xxl-2"></div> 
            </div>  
        </div>
    </body>
</html>

<script>
    const date = new Date();
    document.getElementById("date").value = currentDate;
</script>