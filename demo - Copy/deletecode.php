<?php 
$server = "localhost:3306";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass);
mysqli_select_db($conn, "original_burger");


if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM products WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Product Deleted"); </script>';
        header("Location:Admin_Product.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>