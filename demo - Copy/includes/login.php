<?php
    include 'db.php';

    $_SESSION['id']= '';
    $_SESSION['fname']= '';
    $_SESSION['prodno']= '';

    if(isset($_POST['login'])){
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        $sql = "SELECT USERNAME, PASSWORD FROM user WHERE USERNAME = '$Username' AND PASSWORD = '$Password'";
        $result = mysqli_query($conn,$sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $USER= $row["USERNAME"];
                $PASS= $row["PASSWORD"];

                if($USER == $Username && $PASS == $Password ){

                    $sql = "SELECT USER_ID FROM user WHERE USERNAME = '$Username' AND PASSWORD = '$Password'";
                    $result = mysqli_query($conn,$sql);

                    while($row = $result->fetch_assoc()) {
                        $_SESSION['id'] = $row["USER_ID"];  
                    }
                    
                    echo'<script>
                        alert("Login Successful!"); 
                        window.location.href = "Menu.php";
                        </script>';
                } else{
                    echo'<script>
                        alert("Login Failed!"); </script>';
                }            
            }
        }

        else{
            echo'<script>
                alert("Login Failed! Invalid username or password!");
                </script>';
        }
                    
        $conn->close();
            }
?>   