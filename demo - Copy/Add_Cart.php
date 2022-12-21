<?php
    session_start();
    include 'includes/db.php';

    if(isset($_GET['id']))   {  
        $id=$_GET['id'];
    }else{
        $id = $_SESSION['id'];
    }

    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="pictures/22 (2).png" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&display=swap" rel="stylesheet">
      <!-- Bootstrap ICON -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   <script>
       //ADD QTY
 $(document).on("click", ".addqty", function() {
    var cartid = $(this).data('id');
 alert(cartid);
  });
    </script>
    
    <title>Cart</title>
    <style>
        a{
            text-decoration:none;
        }
        .pic{
            width:120px;
        }

        .bgcolor{
            background-color:white;
            padding:50px;
        }

        .p1{
            font-size:35px;
            text-align:center;
            font-family: 'Merriweather Sans', sans-serif;
            font-weight:bold;
        }
        body{
            background-color:#FFF5E1;
        }

        .p2{
            font-family: 'Merriweather Sans', sans-serif;
            text-align:center;
            font-size:18px;
        }
        .deletebtn{
            background-image:url("pictures/remove.png");
            height:30px;
            width:30px;
            background-size: cover;
            background-repeat: no-repeat;	
            border:0px;
            background-color:white;
        }

        td{
            vertical-align:middle;
            text-align:center;
        }

        .nm{
            width:70px;
        }
        .total1, .total2{
            margin-top:15px;
            border:0px;
            text-align:center;
            width:100px;
        }

        .total2{
            margin-top:0px;
        }

        .back{
            color:black;
            font-size:18px;
            font-family: 'Merriweather Sans', sans-serif;
            
        }

        .p25{
            font-family: 'Inter', sans-serif;
            font-size:18px;
        }

        .ttotalbox{
            width:100px;
            border:0px;
            text-align:center;
        }
    </style>
</head>
<body>
  
    <div class="container ">
        <div class="row" style="height:120px"></div>
        <a href="Menu.php?id=<?=$id?>" class="back"><i class="bi-backspace-fill"></i> Back</a>
        <div class="row">
            <div class="col-xxl-12 bgcolor ">
                <p class="p1">YOUR FOOD CART</p>
                <form method="post">
                    <table class="table table-striped-columns">
                        <thead>
                            <tr>
                                <th colspan="2" width="250px"><p class="p2">Product</p></th>
                                <th><p class="p2">Price</p></th>
                                <th><p class="p2"></p></th>
                                <th><p class="p2">Quantity</p></th>
                                <th><p class="p2"></p></th>
                                <th><p class="p2">Total</p></th>
                                <th><p class="p2">Action</p></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $status = '0';
                                
                            $sql = "SELECT * FROM cart WHERE USER_ID = '$id' AND ORDER_NO = '$status'";
                                $result = mysqli_query($conn,$sql);
                       
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        $rowcount=mysqli_num_rows($result);
                                        //echo"$rowcount";
                                        $_SESSION['count']=$rowcount;
                                        $NO = $row["NO"];
                                        $PNAME= $row["PRODUCT_NAME"];
                                        $QUANTITY= $row["QUANTITY"];
                                        $UNITPRICE= $row["UNIT_PRICE"];
                                        $TOTAL= $row["TOTAL"];
                                        $IMAGE= $row["IMAGE"];
                                        $USER_ID= $row["USER_ID"];   

                                ?>
                                        <tr>
                                                <td width="170px"><img src='<?= $IMAGE ?>' class="pic"></td>
                                                <td><?= $PNAME ?></td>
                                                <td><input type="text" name="prc" class= "total2 " value="<?php echo"₱$UNITPRICE" ?>"></td> 
                                                <?php if($QUANTITY==1){
                                                ?>
                                                <td><button title="Add Qty" type="submit" name="minusqty" value="<?= $NO ?>"class="btn btn-outline-danger btn-sm" disabled><i class="bi-dash"></i></button></td>
                                                <?php }
                                                else {
                                                   ?> 
                                                    <td><button title="Add Qty" type="submit" name="minusqty" value="<?= $NO ?>"class="btn btn-outline-danger btn-sm"><i class="bi-dash"></i></button></td>
                                                <?php 
                                                }?>
                                                <td><?=$QUANTITY?></td>      
                                                <td><button title="Add Qty" type="submit" name="addqty" value="<?= $NO ?>"class="btn btn-outline-success btn-sm"><i class="bi-plus"></i></button></td>
                                                
                                                <td><?=$UNITPRICE*$QUANTITY?></td>
                                                <td width="100px">
                                                <button title="Remove Item" type="submit" name="delbtn" value="<?= $NO ?>" class="deletebtn"></button>
                                                
                                                
                                            </td>
                                            
                                        </tr>
                                <?php   
                                        
                                    }
                                } 
                                
                               ?>
                            </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div class="row" style="height:50px"></div>
        <div class="col-xxl-12 bgcolor ">
                            <?php
                                $status = '0'; 

                                $sql = "SELECT SUM(QUANTITY*UNIT_PRICE) as val FROM cart WHERE USER_ID = '$id' AND ORDER_NO = '$status' ";
                                $result = mysqli_query($conn,$sql);
                                $row = mysqli_fetch_array($result);
                                $total = $row['val'];
                            ?>
                               <p class="p25 text-end">TOTAL: ₱<?php echo $total ?></p>
                               <div class="text-end">
                               
                               <form method="post">
                               <button title="Check out" type="submit" name="checkout" class="btn btn-outline-success btn-md"><i class="bi-cart-plus"></i> Check Out</button>
                            </form>
                    
                            </div>
                            
        </div>
    </div>
</body>

</html>
<?php 
 if (isset($_POST['delbtn'])) {
    $val=$_POST['delbtn'];
  

    $sql = "DELETE FROM cart where `NO`=$val";

    if (mysqli_query($conn,$sql)===TRUE){
        echo "<meta http-equiv='refresh' content='0'>";
    }
 }

 if (isset($_POST['addqty'])) {
    $val=$_POST['addqty'];

    $sql = "UPDATE cart SET Quantity = (Quantity+1)  WHERE `NO`='$val'";

    if (mysqli_query($conn,$sql)===TRUE){
        echo "<meta http-equiv='refresh' content='0'>";
    }
 }

 if (isset($_POST['minusqty'])) {
    $val=$_POST['minusqty'];
  

    $sql = "UPDATE cart SET Quantity = (Quantity-1) WHERE `NO`='$val'";

    if (mysqli_query($conn,$sql)===TRUE){
        echo "<meta http-equiv='refresh' content='0'>";
    }
 }

 if (isset($_POST['checkout'])) {

    $val=$_SESSION['id'];
    $status = '0';
    $sql = "SELECT * FROM cart WHERE USER_ID = '$id' AND ORDER_NO = '$status' ";
    $result = mysqli_query($conn,$sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $NO = $row["NO"];
            $QUANTITY= $row["QUANTITY"];
            $UNITPRICE= $row["UNIT_PRICE"];
            $_SESSION['usid'] = $row['USER_ID'];
            $userid = $row['USER_ID'];

            $TOTALQTY = $QUANTITY * $UNITPRICE;

            include 'includes/updatetotal.php';
        }
    }else{
        echo"<script>alert('Theres no product in your cart!')</script>";
    }
 }

?>

<script>
    function total() {
    var x = document.getElementById("qty").value;
    var y = document.getElementById("prc").value;
    
    var total = x * y;
        
    document.getElementById("total1").value=total;
}



</script>
