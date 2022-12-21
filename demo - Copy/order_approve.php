<?php 
$server = "localhost:3306";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass);
mysqli_select_db($conn, "original_burger");


if(isset($_POST['approveorder']))
{
    $id = $_POST['approved_order'];

    $query = "UPDATE orders SET  STATUS = 'Approved' WHERE ORDER_NO='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Order Approved"); </script>';
        header("Location:Admin_Order.php");
    }
    else
    {
        echo '<script> alert("Something went wrong."); </script>';
    }
}
?>