<?php 
$server = "localhost:3306";
$user = "root";
$pass = "";

$conn = mysqli_connect($server, $user, $pass);
mysqli_select_db($conn, "original_burger");


if(isset($_POST['disapproveorder']))
{
    $id = $_POST['disapproved_order'];

    $query = "UPDATE orders SET  STATUS = 'Cancelled' WHERE ORDER_NO ='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Order Cancelled"); </script>';
        header("Location:Admin_Order.php");
    }
    else
    {
        echo '<script> alert("Something went wrong."); </script>';
    }
}
?>