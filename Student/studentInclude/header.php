<?php
include_once('../dbConnection.php');
session_start();
if(isset($_SESSION['is_login'])){
    $stuLogEmail = $_SESSION['email'];
}
if(isset($stuLogEmail)){
    $sql = "SELECT * FROM student WHERE stu_email = '$stuLogEmail'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    $stu_img = $row['stu_img'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSchool</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="../css/adminstyle.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark fixed-top p0 shadow" style="background-color:#225470">
    <a href="adminDashboard.php" class="col-sm-3 col-md-2 mr-0">E-learning <small class="text-white">Admin Area</small> </a>
    </nav>

    <div class="container-fluid mb-5">
        <div class="row"> 
        <nav class="col-sm-3 col-sm-2 sidebar bg-ligt py-5 d-print-none">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item mb-3">
                        <img src="./stuImg/my.png" class="img-thumbnail rounded-circle" alt="">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(PAGE == 'profile'){echo 'active';}?>" href="studentProfile.php" >
                         <i class="fab fa-accessible-icon"></i>
                         Profile <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myCourse.php">
                         <i class="fab fa-accessible-icon"></i>
                         My Courses <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stu_Feedback.php">
                         <i class="fas fa-users"></i>
                         Feedback
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="changePassword.php">
                         <i class="fas fa-key"></i>
                         Change Password
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                         <i class="fas fa-sign-out-alt"></i>
                         Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
