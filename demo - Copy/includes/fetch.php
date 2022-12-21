<?php
$sql = "SELECT * FROM user WHERE USER_ID = '$id'";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   $firstname= $row['FIRST_NAME'];
   $lastname= $row['LAST_NAME'];
   $address= $row['ADDRESS'];
   $phone= $row['PHONE_NO'];
   $email= $row['EMAIL_ADDRESS'];
    }
}

?>