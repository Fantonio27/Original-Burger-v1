<?php 
$server = "localhost:3306";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass);
mysqli_select_db($conn, "original_burger");


    if(isset($_POST['changeimage']))
    {   
        $id = $_POST['id'];
      


        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "Image/" . $filename;
    
        $query = "UPDATE `products` SET `image`='$filename' WHERE id =$id";
        $query_run = mysqli_query($conn, $query);
        move_uploaded_file($tempname,$folder);
        if($query_run)
        {
            echo '<script> alert("Image Updated"); </script>';
            header("Location:Admin_Product.php");
        }
        else
        {
            echo '<script> alert("Image not Updated"); </script>';
        }
    }
   


?>