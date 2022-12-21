<?php       
    include 'db.php';
    
    if(isset($_POST['Register'])){

        $lowerf=strtolower($_POST['firstname']);
        $lowerl=strtolower($_POST['lastname']);

        $lFIRSTNAME = ucwords($lowerf);
        $lLASTNAME = ucwords($lowerl);   
        $lEMAIL = $_POST['email'];
        $lAGE = $_POST['age'];
        $lBIRTHDAY = $_POST['birth'];
        $lUSERNAME = $_POST['username'];
        $lPASSWORD = $_POST['password'];
        $lCODE = $_POST['code'];
        $lPHONENO = $_POST['phoneno'];
        $lADDRESS = $_POST['address'];
        $lGENDER = $_POST['gender'];

        //$lPRONO = $_POST['prodno'];
        
     
        $_SESSION['lfname'] = $lFIRSTNAME;
        $_SESSION['llname'] =  $lLASTNAME ;
        $_SESSION['lemail'] = $lEMAIL;
        $_SESSION['lbday'] = $lBIRTHDAY;
        $_SESSION['luser'] = $lUSERNAME;
        $_SESSION['lpass'] = $lPASSWORD;
        $_SESSION['ladd']= $lADDRESS;
        $_SESSION['lgender']=$lGENDER;
        $_SESSION['lphone']=$lPHONENO;
        $_SESSION['lage'] = $lAGE;

        $_SESSION['code'] = $lCODE;
        $_SESSION['id'] = '';
        $_SESSION['firstname'] = '';

        $sql = "SELECT USERNAME FROM user WHERE USERNAME = '$lUSERNAME'";
        $result = mysqli_query($conn,$sql);

        if ($result->num_rows > 0) {
            echo'<script>alert("Sorry, Username already taken")</script>'; 
        }
        else{
            $sql = "SELECT EMAIL_ADDRESS FROM user WHERE EMAIL_ADDRESS = '$lEMAIL'";
            $result = mysqli_query($conn,$sql);

            if ($result->num_rows > 0) {
                echo'<script>alert("Email is already registered")</script>'; 
            }
            else{
                $EMAIL = $_SESSION['lemail'];
                $NAME = $_SESSION['lfname'];
                $CODE = $_SESSION['code'];
        
                $emailto = "$EMAIL";
                $subject="Email Confirmation";
                $message="Hello $NAME \nThanks for verifying your $EMAIL account!\nYour code is: $CODE ";
        
                $emailfrom="From: antonio.francislouie@ue.edu.ph";
                $result=mail($emailto,$subject,$message,$emailfrom);
        
                echo'<script>
                window.location.href = "verify.php";
                </script>';
            }
        }
    }

    if(isset($_POST['resend'])){
        $EMAIL = $_SESSION['lemail'];
        $NAME = $_SESSION['lfname'];
        $CODE = $_SESSION['code'];

        $emailto = "$EMAIL";
        $subject="Email Confirmation";
        $message="Hello $NAME \nThanks for verifying your $EMAIL account!\nYour Verification code is: $CODE ";

        $emailfrom="From: antonio.francislouie@ue.edu.ph";
        $result=mail($emailto,$subject,$message,$emailfrom);
    }

    if(isset($_POST['verify'])){
        $FIRSTNAME =  $_SESSION['lfname'];
        $LASTNAME = $_SESSION['llname'];   
        $EMAIL = $_SESSION['lemail'];
        $BIRTHDAY = $_SESSION['lbday'];
        $USERNAME =  $_SESSION['luser'];
        $PASSWORD = $_SESSION['lpass'];
        $AGE = $_SESSION['lage'];
        $ADDRESS = $_SESSION['ladd'] ;
        $GENDER = $_SESSION['lgender'];
        $PHONE = $_SESSION['lphone'];
        //$PRONO = $_POST['prodno'];

        echo"$PHONE";
        
        $vercode = $_POST['verifycode'];
        if($vercode == $CODE){
            $sql = "INSERT INTO user ". "(FIRST_NAME, LAST_NAME, AGE, BIRTHDATE, GENDER, EMAIL_ADDRESS, PHONE_NO, ADDRESS, USERNAME, PASSWORD, CODE) ". 
            "VALUES('$FIRSTNAME','$LASTNAME','$AGE','$BIRTHDAY','$GENDER','$EMAIL','$PHONE','$ADDRESS','$USERNAME', '$PASSWORD', '$CODE')";
             
             if ($conn->query($sql) === TRUE) { 
     
                 $sql = "SELECT USER_ID FROM user WHERE USERNAME = '$USERNAME' AND PASSWORD = '$PASSWORD'";
                 $result = mysqli_query($conn,$sql);
     
                 while($row = $result->fetch_assoc()) {
                      $_SESSION['id'] = $row["USER_ID"];  
                 }
     
                 echo'<script>
                 alert("Register Successful!"); 
                 window.location.href = "Menu.php";
                 </script>';
     
             } else {
                 echo "<font style='font-size:16px; color:#bc4749; margin-top:20px'>Error Inserting Data: ". $conn->error. "</font>";}
         }else{
             echo'<script>alert("Incorrect Verification code");</script>';
             
         } 

    }         
   
?>