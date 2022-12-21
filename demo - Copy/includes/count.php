<?php
 $status = '0';
  $sql = "SELECT * FROM cart WHERE USER_ID = '$id' AND ORDER_NO = '$status'";
  $result = mysqli_query($conn,$sql);
              
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $rowcount=mysqli_num_rows($result);
          //echo"$rowcount";
          $_SESSION['count']=$rowcount;
        }
  }else{
    $_SESSION['count']=0;
  }
?>