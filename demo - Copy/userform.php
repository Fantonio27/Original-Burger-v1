
<?php
    include 'includes/db.php';
    
    session_start();

    if(isset($_GET['id']))  {  
        $id=$_GET['id'];
    }else{
        $id = $_SESSION['id'];
    }

    //echo"$id";

    $sql = "SELECT * FROM user WHERE USER_ID = '$id'";
    $result = mysqli_query($conn,$sql);
                
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION['frstnme'] = $row['FIRST_NAME'];
            $_SESSION['lstnme'] = $row['LAST_NAME'];
            $_SESSION['usrname'] = $row['USERNAME'];
            $_SESSION['biday'] = $row['BIRTHDATE'];
            $_SESSION['eml'] = $row['EMAIL_ADDRESS'];
            $_SESSION['add'] = $row['ADDRESS'];
            $_SESSION['age'] = $row['AGE'];
            $_SESSION['gender'] = $row['GENDER'];
            $_SESSION['phone'] = $row['PHONE_NO'];
        }
    }
    $frstnme=$_SESSION['frstnme'];
    $lstnme=$_SESSION['lstnme'];
    $usrname=$_SESSION['usrname'];
    $biday=$_SESSION['biday'];
    $eml=$_SESSION['eml'];
    $add=$_SESSION['add'];
    $age=$_SESSION['age'];
    $gender=$_SESSION['gender'];
    $phone=$_SESSION['phone'];
    
?>

<html>
    <head>
        <title>User Form</title>
        <link rel="icon" href="pictures/22 (2).png" type="image/icon type">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    </head>
    <style>
        .w{
            background-color:red;
        }

        body{
            background-color:#FFF5E1;
            overflow-x:hidden;
        }

        .box{
            background-color:white;
            width:100%;
            padding:50px 60px;
            border-radius:10px;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            border-bottom-left-radius:0px;
            border-top-left-radius:0px;
            height:1400px;
            
        }

        .p1{
            font-size:34px;
            font-family: 'Quicksand', sans-serif;
            color:#343a40;
            text-align:center;
            
        }

        .n{
            padding:0px;
        }

        .p2{
            font-family: 'Tajawal', sans-serif;
            font-size:24px;
            margin-left:35px;
            font-weight:bold;
            color:#343a40;
            border:0px;
            background-color:white;
        }

        .p2:hover{
            color:#0077b6;
        }


        .p3{
            font-size:33px;
            font-family: 'Quicksand', sans-serif;
            color:#343a40;
        }

        .p4{
            font-family: 'Tajawal', sans-serif;
            font-size:22px;
            font-weight:bold;
            margin-right:15px;
        }

        .hr1{
            border:1px solid #495057;
            margin-bottom:40px;
        }

        .p5{
            font-size:18px;
            font-family: 'Tajawal', sans-serif;
            font-weight:bold;
            color:#343a40;
            margin-left:2px;
        }

        .p6{
            font-size:19px;
            font-family: 'Tajawal', sans-serif;
            color:#6c757d;
            font-weight:bold;
            margin-top:40px;
        }

        .txtbox1{
            margin-bottom:15px;
            margin-top:3px;
        }

        .txtbox2{
            position:relative;
            bottom:16;
        }

        .savebtn{
            width:150px;
            float:left;
            margin-top:20px;
        }

        .pics{
            width:24px;
            height:24px;
            margin-right:8px;
            position:relative;
            bottom:3; 
        }

        .box1{
            background-color:white;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            border-radius:15px;
            border-bottom-right-radius:0px;
            border-top-right-radius:0px;
            height:1400px;   
            padding:50px; 
        }

        a{
            text-decoration:none;
           
            
        }

        .pics1{
            width:23px;
            height:23px;
            margin-right:8px;
            position:relative;
            bottom:3; 
            margin-left:10px;
            
        }

        .p30{
            font-size:19px;
            font-family: 'Tajawal', sans-serif;
            font-weight:bold;
            text-align:center
        }

        .pics2{
            width:100px;
            height:100px;
        }

        .pic3{
            height:30px;
            width:30px;
            float:left;
            margin-right:15px;
        }
        .back{
            position:relative;
            top:30;
            left:5;
        }

    </style>
    <body>
        <div class="row" style="height:90px;"></div>
        <div class="row" style="height:20px;">
            <div class="col-xxl-1"></div>
            <div class="col-xxl-2">
            <a href="Menu.php?id=<?=$id?>" class="back">Back</a>
            </div>  
        </div>
        <div class="row">
            <div class="col-xxl-1">
            </div>
            <div class="col-xxl-2 n">
                <div class="box1">
                    <p class="p1">My Account</p>
                    <form method="post">
                        <button type="submit" name="account" class="p2"><img src="pictures/file.png" class="pics">My details</button>
                        <button type="submit" name="myorder" class="p2"><img src="pictures/clipboard.png" class="pics">My orders</button>
                        <a href="Index.php?id=" class="p2"><img src="pictures/logout.png" class="pics1">Logout</a>            
                    </form>
                </div>
            </div>
            <div class="col-xxl-8 n">
                <div class="box">
                <form method="POST">
                    <p class="p6">Manage your account</p>
                    <p class="p3">Your account details</p>
                    <img src="pictures/edit.png" class="pic3"><p class="p4">Personal Information</p>
                    <hr class="hr1">
                    <div class="row">  
                            <div class="col-xxl-4">
                                <label class="p5">FIRST NAME</label>
                                <input type="text" class="form-control txtbox1" placeholder="First Name" name="firstname"
                                minlength="2" maxlength="20" pattern="[a-zA-Z- ]{1,}" title="Letters only" value="<?php echo"$frstnme"?>"required >

                                <label class="p5">Address</label><br> 
                                <input type="text" class="form-control txtbox1" placeholder="Region, Province, City, Barangay"
                                 minlength="10" maxlength="70" name="address" value ="<?=$add?>" required>

                                <label class="p5">BIRTH DATE</label>
                                <input type="date" class="form-control txtbox1" placeholder="" name="birth"  
                                max="2003-12-31" min="1942-01-01" value="<?php echo"$biday"?>" onclick = "ageCalculator()" id="DOB" required >

                                <label class="p5">EMAIL ADDRESS</label>
                                <input type="email" class="form-control txtbox1" placeholder="example@email.com" name="email"
                                minlength="9" maxlength="30" pattern="[a-zA-Z-z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$" 
                                title="must contain a dot sign, add at least 2 letters." value="<?php echo"$eml"?>" required >

                                <!--<input type="submit" value="Save"  class="form-control savebtn btn btn-primary" name="save">-->
                            </div>
                            <div class="col-xxl-4">
                                <label class="p5">LAST NAME</label>
                                <input type="text" class="form-control txtbox1" placeholder="Last Name" name="lastname" style="float:right;"
                                minlength="2" maxlength="20" pattern="[a-zA-Z- ]{1,}"  value="<?php echo"$lstnme"?>" title="Letters only" required >
                                
                                <p class="p5">USERNAME</p> <input type="text" class="form-control txtbox2" placeholder="Enter Username" name="username" 
                                minlength="8" maxlength="30" pattern="[a-zA-Z0-9-_ ]{1,}" title="do not include special characters"
                                value="<?php echo"$usrname"?>"
                                required >

                                <label class="p5">Age</label><br> 
                                    <input type="Text" class="form-control txtbox1" placeholder="" id="age" value ="<?=$age?>"
                                    name="age" required >
                            </div>
                            <div class="col-xxl-4">
                                <label class="p5" style="margin-top:3px;">Gender</label><br> 
                                    <select name="gender" class="form-control" required>
                                       
                                        <option value="Male">Male</option>
                                        <option value="Women">Women</option>
                                        <option value="Other">Prefer not to say</option>
                                    </select>

                                <label class="p5">Phone No</label><br> 
                                <input type="text" class="form-control txtbox1" placeholder="(+63) 12-3456-789"
                                minlength="11" maxlength="12" name="phoneno" onkeypress="return onlyNumberKey(event)"
                                value ="<?=$phone?>"  required>
                            </div>
                            <div class="row">
                                <div class="col-xxl-10"></div>
                                <div class="col-xxl-2">
                                    <input type="submit" value="Save" name="save" class="form-control btn btn-primary">
                                </div>
                            </div>
                            <?php include 'includes/updateuser.php';?>

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
                                            $_SESSION['ordno1'] = $row['ORDER_NO'];
                                            $_SESSION['date'] = $row['DATE_ORDER'];
                                        }
                                    }
                                    $ORNO=$_SESSION['ordno1'];
                                    //echo"$ORNO";
                                    $sql = "SELECT * FROM cart WHERE USER_ID = '$id'";
                                    $result = mysqli_query($conn,$sql);
                                                
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['prname'] = $row['PRODUCT_NAME'];
                                            $_SESSION['qty'] = $row['QUANTITY'];
                                            $_SESSION['total'] = $row['TOTAL'];  
                                            $_SESSION['img'] = $row['IMAGE'];  
                                                
                                    
                                    $ORDATE=$_SESSION['date'];
                                    $PRNAME = $_SESSION['prname'] ;
                                    $QTY = $_SESSION['qty'];
                                    $TOTAL = $_SESSION['total'];
                                    $IMAGE = $_SESSION['img'];
                                    
                                    ?>
                                    <tr>
                                        <td><center><?php echo"$ORDATE"?></center></td>
                                        <td><center><?php echo"$PRNAME"?></center></td>
                                        <td><center><?php echo"$QTY"?></center></td>
                                        <td><center><?php echo"$TOTAL "?></center></td>
                                        <td><center><img src="<?php echo"$IMAGE"?>" class="pics2"></center></td>
                                        <?php
                                        }
                                        }else{
                                            echo"no record";
                                        }
                                        ?>
                                    </tr>        
                                </tbody>
                            </table>
                         </form>        
                    </div>     
                </div>
            </div>
            <div class="col-xxl-1"></div>
            <div class="row" style="height:90px;"></div>
        </div>
    </body>
</html>

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
</script>>

