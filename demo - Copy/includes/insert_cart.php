<?php
    if(isset($_POST['send'])){
        $userid=$id1 ;
        if($userid==0){
            echo'<script>
            alert("Please login/Sign In first to access!"); 
            window.location.href = "Index.php";
            </script>';
        }else{
            $pname=$_POST['pname'];
       
            $status='0';
            $sql = "SELECT * FROM cart WHERE PRODUCT_NAME = '$pname' AND USER_ID ='$userid' AND ORDER_NO = '$status'";
            $result = mysqli_query($conn,$sql);
    
            if ($result->num_rows > 0) {
                echo'<script>alert("Product is already added to your cart!");</script>';
            }
            else{
                $CODE = $_POST['code'];
                
                $prodno=$_SESSION['prodno'];
                $qty='1';
        
                $sql = "SELECT * FROM products WHERE id = '$CODE' ";
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
    
                    if($Avail == "YES"){
                        $sql = "INSERT INTO cart ". "(PRODUCT_NO, PRODUCT_NAME, QUANTITY, UNIT_PRICE, TOTAL, IMAGE, USER_ID) ".
                         "VALUES('$prodno','$name','$qty','$price', '$price', '$image', '$userid')";
                        $result = mysqli_query($conn,$sql);
    
                        echo'<script>
                            alert("Product is successfully added to your cart!"); 
                        </script>';
                    }if ($Avail == "NO"){
                        echo'<script>alert("THIS PRODUCT IS NOT AVAILABLE");</script>';
                    }
                }
            }
        }
       
    }

?>