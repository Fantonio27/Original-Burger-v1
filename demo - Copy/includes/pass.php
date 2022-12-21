<?php  
function  createConfirmationmbox() {  
    echo '<script type="text/javascript"> ';  
    echo 'if (confirm("Confirm Order?") == true) {';  
    echo ' alert("Order Successful");'; 
    echo 'window.location.href = "Receipt.php?insert=1";'; 
    echo '} else {';
    echo 'window.location.href = "Payment_Checkout.php";'; 
    echo '}'; 
    echo '</script>';  
}  
?>  


<?php
  
        if(isset($_POST['placeorder'])){

          $_SESSION['fname']=$_POST['FirstName'] . " " . $_POST['LastName'];
          $_SESSION['address']=$_POST['address'] ;
          $_SESSION['phone'] = $_POST['phone'];
          $_SESSION['email'] = $_POST['email'];

          if(isset($_POST['order'])){
            $val=$_POST['order'];
            if($val=='now'){
              $_SESSION['date'] = $_POST['date1'];
              $_SESSION['time'] = $_POST['time1'];
            }elseif ($val=='later'){
              $_SESSION['date'] = $_POST['deliverydate'];
              $_SESSION['time'] = $_POST['time'];
            }
          }

          $_SESSION['date1'] = $_POST['date2'];

          //$_SESSION['total'] = $_POST['total'];
          //$_SESSION['message'] = $_POST['comment'];
          $_SESSION['payment'] = $_POST['paymentmethod'];
        
          createConfirmationmbox();  
        }
        $FULLNAME = $_SESSION['fname'];
        $ADDRESS = $_SESSION['address'];
        $PHONE_NO = $_SESSION['phone'];
        $EMAIL_ADDRESS = $_SESSION['email'];
        $DELIVERY_DATE = $_SESSION['date'];
        $DELIVERY_TIME = $_SESSION['time'];
        //$MESSAGE =  $_SESSION['message'];
        $USER_ID =$id;
        $STATUS =  'Pending';
        $PAYMENT= $_SESSION['payment'] ;
        $TOTAL= $_SESSION['total'];
        $datenow = $_SESSION['date1'];
          //echo"$TOTAL";
          
          if(isset($_GET['insert'])){
      
            $sql = "INSERT INTO orders ". "(NAME, ADDRESS, PHONE_NO, EMAIL_ADDRESS, DELIVERY_DATE, DELIVERY_TIME, TOTAL ,USER_ID, STATUS, DATE_ORDER) ".
            "VALUES('$FULLNAME','$ADDRESS','$PHONE_NO','$EMAIL_ADDRESS', '$DELIVERY_DATE', '$DELIVERY_TIME','$TOTAL', '$USER_ID','$STATUS', '$datenow' )";
            $result = mysqli_query($conn,$sql);
            if($result)
              {
                   $ORDNO=$_SESSION['ordno'];
                   
                   $sql = "UPDATE cart SET ORDER_NO='$ORDNO' WHERE USER_ID='$USER_ID' ";
                   $result = mysqli_query($conn,$sql);
             
                   $emailto = "$EMAIL_ADDRESS";
                   $subject="Receipt";

                   $headers = "From:myoukyuusaisha@gmail\r\n";
                   $headers .= "MIME-Version: 1.0\r\n";
                   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                   $message = "<html>
                  <table width='50%' border='0' style='background-color:#0353a4; height:25px'>
                    <tr>
                      <p style='color:white;font-size:20px; font-weight:bold;'>Receipt</p>
                    </tr>
                  </table>
                  
                  <table width='50%' border='0'>
                    <tr width='50px'>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Name: </td>
                      <td>$FULLNAME</td>
                      <td></td>
                      <td>Delivery Date: </td>
                      <td>$DELIVERY_DATE</td>
                    </tr>
                    <tr>
                      <td>Email Address: </td>
                      <td>$EMAIL_ADDRESS</td>
                      <td></td>
                      <td>Delivery Time: </td>
                      <td>$DELIVERY_TIME</td>
                    </tr>
                    <tr>
                      <td>Address: </td>
                      <td>$ADDRESS</td>
                      <td></td>
                      <td>Payment Method: </td>
                      <td>$PAYMENT</td>
                    </tr>
                    <tr>
                      <td>Phone Number: </td>
                      <td>$PHONE_NO</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                  <table width='50%' border='1' cellpadding='2'>
                  <tr>
                    <th>QTY</th>
                    <th>Product Name</th> 
                    <th>Price</th>
                  </tr>
                  <tr>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
                  </tr>
                  <tr>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
                  </tr>
                  <tr>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
                  </tr>
                      </table>  
                  <table width='50%' border='0'>
                    <tr>	
                      <td>Thank you for your order!</td>
                    </tr>
                  </table>    
                  <table width='50%' border='0' style='background-color:#0353a4; height:25px'>
                  </table>
                  </html>" ;
                
                if( mail($emailto,$subject,$message,$headers) ){
                   //echo " message sent succesfuly";
                }
                 
                else {
                  
                }
                  //echo " message could not be sent";

             
                   //$emailfrom="From: antonio.francislouie@ue.edu.ph";
                   //$result=mail($emailto,$subject,$message,$emailfrom);
                   }
            else
                {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();

                }
          } 
       
    ?>
