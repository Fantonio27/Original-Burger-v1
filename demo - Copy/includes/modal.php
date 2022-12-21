    <link rel='stylesheet' href="index.css" type='text/css' media='all'>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content" style="border-radius:20px ; box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px; 
                border:0px; background-color: #FFF5E1;">
                <div class="modal-body" style="padding:0px; height:615px;">
                    <div class="row">
                        <div class="col-xxl-5 col-md-5 d-sm-none d-md-block d-none d-sm-block n">
                            <div class="pbbox3"></div>
                        </div>
                        <div class="col-xxl-7 col-md-7 n">
                            <div class="bbox2">
                                <div class="bbox4">
                                    <form action="<?php $_PHP_SELF?>" method="POST">
                                        <button type="reset" class="btn-close ex1" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <p class="p30">Login</p>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control txtbox" id="floatingInput" placeholder="name@example.com" name="Username" 
                                            minlength="8" maxlength="20" pattern="[a-zA-Z0-9-_ ]{1,}" title="only letters, numbers, and underscores" required>
                                            <label for="floatingInput"><font color="#495057">Username</font></label>
                                        </div>

                                        <div class="form-floating">
                                            <img src="pictures/visibility.png" class="passicon" style="cursor:pointer" id="passicon" onclick="changeImage()">
                                            <input type="password" class="form-control txtpass" id="floatingPassword" placeholder="Password" name="Password" 
                                            minlength="8" maxlength="20" required>
                                            <label for="floatingPassword"><font color="#495057">Password</font></label>         
                                        </div>

                                            <a href="forgetpass.php"><p class="p31"><u>Forget your password?</u></p></a>
                                            <input type="submit" class="btn loginbtn" value="Login" name="login">

                                            <?php include "includes/login.php" ?>
                                    </form>
                                </div>
                                <hr style="margin-top:40px;">
                                <p class="app2" style="margin-top:40px;">Don't have an account?
                                <a class="app3" href="Register.php"> Register</a><p>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
    function changeImage() {
        var image = document.getElementById('passicon');

        var x = document.getElementById("floatingPassword");

        if (image.src.match("pictures/visibility.png")) {
            image.src = "pictures/nonvisibility.png";
            x.type = "text";
        }
        else {
            image.src = "pictures/visibility.png";
            x.type = "password";
        }
    }
</script>

<script>
    let text1 = "";

    for (let i = 0; i < 5; i++) {
        text1+=Math.floor(Math.random() * 10);
    }

    document.getElementById("prodno").value = "prodno_"+text1;
</script>

