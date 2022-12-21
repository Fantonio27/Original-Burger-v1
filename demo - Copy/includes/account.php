
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
                                    name="age" required disabled>
                            </div>
                            <div class="col-xxl-4">
                                <label class="p5" style="margin-top:3px;">Gender</label><br> 
                                    <select name="gender" class="form-control" required>
                                        <option value="<?=$regender?>"></option>
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
                        </form>        
                    </div>      
                               
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