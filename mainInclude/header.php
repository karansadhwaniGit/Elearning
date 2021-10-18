
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSchool</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
        <!--start navigation  -->
 <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">O-School</a>
    <!-- <b class="navbar-text">The Best is here!</b> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item custom-nav-item"><a href="./courses.php" class="nav-link">Courses</a></li>
        <li class="nav-item custom-nav-item"><a href="../paymentstatus.php" class="nav-link">Payment Status</a></li>

        <?php 
        session_start();
        if(isset($_SESSION["is_login"])){
          echo '<li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
          <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout </a></li>';
        }else{
          echo '<li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" id="navLoginBtn" data-bs-target="#stuLoginModalCenter">Login</a></li>
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" id="navSignBtn" data-bs-target="#stuRegModalCenter">Signup</a></li>';
        }
        ?>

        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback </a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact </a></li>
      </ul>
    </div>
  </div>
</nav>