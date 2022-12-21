<p class="p6">Order Table</p>
<p class="p3">Order History</p>
<hr class="hr1"> 
<table class="table-striped-columns table-bordered " > 
    <thead>      
        <tr>
            <th width="200px"><p class="p30">Order Date</p></td>
            <th width="250px"><p class="p30">Product Name</p></td>
            <th width="200px"><p class="p30">Quality</p></td>
            <th width="200px"><p class="p30">Total</p></td>
            <th width="250px"><p class="p30">Images</p></td>
        </tr>
    </thead> 
    <?php
        $sql = "SELECT * FROM orders WHERE USER_ID = '$id'";
        $result = mysqli_query($conn,$sql);
                    
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $_SESSION['ordno'] = $row['ORDER_NO'];
            }
        }
        $ORNO=$_SESSION['ordno'];

        $sql = "SELECT * FROM cart WHERE ORDER_NO = '$ORNO'";
        $result = mysqli_query($conn,$sql);
                    
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $_SESSION['prname'] = $row['PRODUCT_NAME'];
                $_SESSION['qty'] = $row['QUANTITY'];
                $_SESSION['total'] = $row['TOTAL'];  
                $_SESSION['img'] = $row['IMAGE'];  
                    
           
        $ORDATE=$_SESSION['ordno'];
        $PRNAME = $_SESSION['prname'] ;
        $QTY = $_SESSION['qty'];
        $TOTAL = $_SESSION['total'];
        $IMAGE = $_SESSION['img'];
        ?>
        <tr>
            <td><?php echo"$ORDATE"?></td>
            <td><?php echo"$PRNAME"?></td>
            <td><?php echo"$QTY"?></td>
            <td><?php echo"$TOTAL "?></td>
            <td><center><img src="<?php echo"$IMAGE"?>" class="pics2"></center></td>
            <?php
             }
            }
            ?>
        </tr>        
    </tbody>
</table>
        
               