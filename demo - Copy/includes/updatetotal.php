<?php
  $sql = "UPDATE cart SET TOTAL = '$TOTALQTY'  WHERE `NO`='$NO'";

  if (mysqli_query($conn,$sql)===TRUE){
      echo'<script>
      window.location.href = "Payment_Checkout.php";
      </script>';
  }
?>