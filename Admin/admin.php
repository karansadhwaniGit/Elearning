<?php
    session_start();

include_once('../dbConnection.php');
if(!isset($_SESSION['admin_is_login'])){
    if(isset($_POST["adminLogemail"]) && isset($_POST["adminLogpass"]) && isset($_POST["adminlogin"])){
    $email=$_POST["adminLogemail"];
    $pass=$_POST["adminLogpass"];
    $sql1="SELECT admin_email FROM adm WHERE admin_email ='$email' && admin_pass = '$pass'";
    $result = $conn->query($sql1);
    $row = $result->num_rows;
    if($row == 1){
        $_SESSION['admin_is_login']=true;
        $_SESSION['email']=$email;
        echo $row;
    }
    else{
        echo $row;
    }
    }
    }
