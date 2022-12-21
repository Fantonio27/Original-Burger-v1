<?php 
$server = "localhost:3306";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass);
mysqli_select_db($conn, "original_burger");


    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $name = $_POST['name'];
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];
        $folder = "Image/" . $filename;
        $price = $_POST['price'];
        $description = $_POST['description'];
        $availability = $_POST['availability'];


        $query = "UPDATE `products` SET `name`='$name',`image`='$filename',`price`='$price',`description`='$description',`availability`='$availability' WHERE id =$id";
        $query_run = mysqli_query($conn, $query);
        move_uploaded_file($tempname,$folder);
        if($query_run)
        {
            echo '<script> alert("Product Updated"); </script>';
            header("Location:Admin_Product.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>