<?php

if(isset($_POST['save'])){
    echo"<script>alert('Update Successful!')</script>";
    $FRST=$_POST['firstname'];
    $LAST=$_POST['lastname'];
    $BIRTH=$_POST['birth'];
    $USER=$_POST['username'];
    $EMAL=$_POST['email'];

    $sql = "UPDATE user SET FIRST_NAME=' $FRST', LAST_NAME='$LAST', BIRTHDATE='$BIRTH',USERNAME='$USER', EMAIL_ADDRESS = '$EMAL' WHERE USER_ID='$id' ";
    $result = mysqli_query($conn,$sql);

    if($query_run)
    {
       echo"<script>alert('Update Successful!')</script>";
    }
    else
    {
        echo"<script>alert('Failed Update')</script>";
    }
}

?>