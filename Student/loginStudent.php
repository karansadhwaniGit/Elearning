<?php
    session_start();

include_once('../dbConnection.php');
if(!isset($_SESSION['is_login'])){
    if(isset($_POST["stuLogemail"]) && isset($_POST["stuLogpass"]) && isset($_POST["stulogin"])){
    $email=$_POST["stuLogemail"];
    $pass=$_POST["stuLogpass"];
    $sql1="SELECT stu_email FROM student WHERE stu_email ='$email' && stu_pass = '$pass'";
    $result = $conn->query($sql1);
    $row = $result->num_rows;
    if($row == 1){
        $_SESSION['is_login']=true;
        $_SESSION['email']=$email;
        echo $row;
    }
    else{
        echo $row;
        
    }
    }
    }
