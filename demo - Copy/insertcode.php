<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'original_burger');

if(isset($_POST['insertdata']))
{
    $name = ucfirst($_POST['product_name']);
    //$image = $_POST['image'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $availability = $_POST['availability'];

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "Image/" . $filename;

    $query = "INSERT INTO products (`name`,`image`,`price`,`description`,`availability`) VALUES ('$name','$folder','$price','$description','$availability')";
    $query_run = mysqli_query($connection, $query);
    move_uploaded_file($tempname,$folder);
    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: Admin_Product.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}


?>