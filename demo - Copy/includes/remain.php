
<?php
    if(empty($_POST['lastname'])){
        $relastname= '';
    }else{
        if(isset($_POST['Register'])){
            $relastname = $_POST['lastname'];
        }
    }
?>
<?php
    if(empty($_POST['email'])){
        $reemail= '';
    }else{
        if(isset($_POST['Register'])){
            $reemail = $_POST['email'];
        }
    }
?>
<?php
    if(empty($_POST['birth'])){
        $rebirth= '';
    }else{
        if(isset($_POST['Register'])){
            $rebirth = $_POST['birth'];
        }
    }
?>
<?php 
    if(empty($_POST['age'])){
        $reage= '';
    }else{
        if(isset($_POST['Register'])){
            $reage = $_POST['age'];
            $_SESSION['lage'] = $reage;
        }
    }
?>
<?php
    if(empty($_POST['address'])){
        $readdress= '';
    }else{
        if(isset($_POST['Register'])){
            $readdress = $_POST['address'];
            $_SESSION['ladd'] = $readdress;
        }
    }
?>
<?php
    if(empty($_POST['gender'])){
        $regender= '';
    }else{
        if(isset($_POST['Register'])){
            $regender = $_POST['gender'];
        }
    }
?>
<?php
    if(empty($_POST['phoneno'])){
        $rephoneno= '';
    }else{
        if(isset($_POST['Register'])){
            $rephoneno = $_POST['phoneno'];
        }
    }
   
?>