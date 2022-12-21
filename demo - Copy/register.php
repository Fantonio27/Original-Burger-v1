<?php 
  include "includes/db.php";

  session_start();
?>

<html>
    <head>
        <link rel="icon" href="pictures/22 (2).png" type="image/icon type">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <style>
        body{
            background-color:#FFF5E1;
        }
        .box{
            background-color:white;
            width:100%;
            height:900px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            padding:80px;
            padding-top:60px;
            border-bottom-right-radius:20px;
            border-top-right-radius:20px;
        }

        .r{
          padding:0px;
        }

        .bg{
            background-image: url("pictures/PIC8.jpg");
            background-size:cover;
            height:900px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            border-bottom-left-radius:20px;
            border-top-left-radius:20px;
        }

        .pp30{
            font-size: 38px;
            font-weight:bold;
            text-align:center;
            color: #760E0A;
            font-family: 'Open Sans', sans-serif;
        }

        .pp31{
            font-size: 17px;
            text-align:center;
            font-family: 'Roboto', sans-serif;
            color: #343a40;
            bottom:10;
            position:relative;  
        }

        .label{
            font-size:15px;
            font-family: 'Roboto', sans-serif;
            color:#343a40;
            margin:10px 0px 3px 3px;
            font-weight:bold;
        }

        .loginbtn{
            width: 100%;
            margin-top: 0px;
            background-color: #E19656;
            border: 0px;
            border-radius: 5px;
            height: 45px;
            letter-spacing: 1px;
            font-size: 17px;
            color:white;
            font-weight:bold;
            font-family: 'Open Sans', sans-serif;
            letter-spacing:3px;
        }

        .loginbtn:hover{
            background-color: #760E0A;
            color:white;
        }


        .app2, .app3{
            font-size: 16px;
            text-align: center;
            margin-top: 28px;        
        }

        .app3{
            color:#2c7da0   ;
            cursor: pointer;
            text-decoration:none;
        }
    </style>
    <body>
        <div class="container-fluid">
            <div class="row" style="height:55px;"></div>
            <div class="row">
                <div class="col-xxl-2"></div>
                <div class="col-xxl-3 r">
                    <div class="bg">

                    </div>
                </div>
                <div class="col-xxl-5 r">
                    <div class="box">
                        <?php                  
                            include "includes/remain.php";
                        
                            
                            if(empty($_POST['firstname'])){
                                $refirstname= '';
                            }else{
                                if(isset($_POST['Register'])){
                                $refirstname = $_POST['firstname'];
                                }
                            }
                        ?>
                        <form action="<?php $_PHP_SELF ?>" method="POST">
                            <p class="pp30">Sign Up</p>
                            <p class="pp31">Please fill in this form to create an account!</p> 
                            
                            <div class="row">
                                <div class="col-xxl-6">
                                    <label class="label" style="margin-top:0px;">First Name</label><br> 
                                    <input type="text" class="form-control txtbox1" placeholder="Enter First Name" name="firstname" 
                                    minlength="2" maxlength="20" pattern="[a-zA-Z- ]{1,}" value ="<?=$refirstname?>" title="Letters only" required>
                                </div>
                                <div class="col-xxl-6">     
                                    <label class="label" style="margin-top:0px;">Last Name</label><br> 
                                    <input type="text" class="form-control txtbox1" placeholder="Enter Last Name" name="lastname" 
                                    minlength="2" maxlength="20" pattern="[a-zA-Z- ]{1,}"  value ="<?=$relastname?>" title="Letters only" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-xxl-4">
                                    <label class="label">Date of Birth</label><br> 
                                    <input type="date" class="form-control txtbox1" placeholder="" value ="<?=$rebirth?>" name="birth" 
                                    max="2003-12-31" min="1942-01-01" onclick = "ageCalculator()" id="DOB" required>
                                </div>
                                <div class="col-xxl-2">
                                    <label class="label">Age</label><br> 
                                    <input type="Text" class="form-control txtbox1" placeholder="" id="age" value ="<?=$reage?>"
                                    name="age" required>
                                </div>
                                <div class="col-xxl-6">       
                                    <label class="label">Gender</label><br> 
                                    <select name="gender" class="form-control" required>
                                        <option value="<?=$regender?>"></option>
                                        <option value="Male">Male</option>
                                        <option value="Women">Women</option>
                                        <option value="Other">Prefer not to say</option>
                                    </select>
                                </div>
                            </div>

                                <label class="label">Address</label><br> 
                                <input type="text" class="form-control txtbox1" placeholder="Region, Province, City, Barangay"
                                 minlength="10" maxlength="70" name="address" value ="<?=$readdress?>" required>

                                <label class="label">Email Address</label><br> 
                                <input type="email" class="form-control txtbox1" placeholder="example@email.com" name="email" 
                                minlength="9" maxlength="30" pattern="[a-zA-Z-z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$" 
                                title="must contain a dot sign, add at least 2 letters." value ="<?=$reemail?>" required>

                                <label class="label">Phone No</label><br> 
                                <input type="text" class="form-control txtbox1" placeholder="(+63) 12-3456-789"
                                minlength="11" maxlength="12" name="phoneno" onkeypress="return onlyNumberKey(event)"
                                value ="<?=$rephoneno?>"  required>

                                <label class="label">Username (only letters, numbers, and underscores)</label><br> 
                                <input type="text" class="form-control txtbox1" placeholder="Enter Username" name="username" 
                                minlength="8" maxlength="30" pattern="[a-zA-Z0-9-_ ]{1,}" title="do not include special characters" required>

                                <label class="label">Password (min. 8 char)</label><br> 
                                <input type="password" class="form-control txtbox1" placeholder="Enter Password" name="password" 
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  maxlength="20" id="password"
                                title="Password must be 8-20 characters and include at least one uppercase, one number or special characters." required>

                                <label class="label">Confirm Password</label><br> 
                                <input type="password" class="form-control txtbox1" placeholder="Re-type password" name="confirm" 
                                maxlength="20" id="confirm" required>
                        
                                <input type="text" class="form-control txtbox1" id="code" value="text" name="code" hidden>

                                <input type="text" class="form-control txtbox1" id="prodno" value="text" name="prodno" hidden>

                                <br>
                                <input type="submit" class="btn loginbtn" value="Register" name="Register">
                            
                            <?php
                                include "includes/insert.php";

                                include "includes/remain.php";
                            ?>
                            <p class="app2" style="margin:24px 0px;">Already have an account?<a class="app3" href="index.php"> Login</a><p>
                        </form>  
                        
                    </div>
                </div>
                <div class="col-xxl-2"></div>
            </div>
            <div class="row" style="height:50px;"></div>
        </div>
    </body>
</html>


<script>
    function onlyNumberKey(evt) {
        
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>

<script>
 function ageCalculator() {
    var userinput = document.getElementById("DOB").value;
    var dob = new Date(userinput);
    if(userinput==null || userinput=='') {
      document.getElementById("message").innerHTML = "**Choose a date please!";  
      return false; 
    } else {
    
   
    var month_diff = Date.now() - dob.getTime();
    var age_dt = new Date(month_diff);  
    var year = age_dt.getUTCFullYear();
    var age = Math.abs(year - 1970);

    return document.getElementById("age").value =  
            age;
    }
}
</script>

<script>
    let text = "";

    for (let i = 0; i < 6; i++) {
        text+=Math.floor(Math.random() * 10);
    }

    document.getElementById("code").value = text;
</script>

<script>
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>