<?php
    if(isset($_POST['save'])){
        $fname=$_POST['firstname'] ;
        $address=$_POST['address'] ;
        $birth=$_POST['birth'] ;
        $email=$_POST['email'] ;
        $lastname=$_POST['lastname'] ;
        $username=$_POST['username'] ;
        $age=$_POST['age'] ;
        $gender=$_POST['gender'] ;
        $phoneno=$_POST['phoneno'] ;

        $sql = "UPDATE user SET FIRST_NAME='$fname', LAST_NAME='$lastname', BIRTHDATE='$birth',USERNAME='$username', EMAIL_ADDRESS = '$email', 
        GENDER= '$gender', AGE ='$age', PHONE_NO ='$phoneno', ADDRESS='$address' WHERE USER_ID='$id' ";

        if (mysqli_query($conn,$sql)===TRUE){
            echo'<script>
            alert("Record Successfully updated");
            </script>';
             
        }else{
            echo'<script>
            alert("Error");
            </script>';
        }
    }
?>

