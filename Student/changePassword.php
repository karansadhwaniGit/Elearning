<?php 
include('./studentInclude/header.php');
if(!isset($_SESSION['is_login'])){
    $msg = "<div class='alert alert-warning mt-3'>Not Logged In</div>";
}
if(isset($_REQUEST['changePassBtn']) && isset($_REQUEST['stu_pass'])){
    $stu = $_SESSION['email'];
    $pass = $_REQUEST['stu_pass'];
    $sql = "UPDATE student SET stu_pass = '$pass' WHERE stu_email = '$stu'";

   if($conn->query($sql)){
     $msg = "<div class='alert alert-warning mt-3'>Changed</div>";
   }
   else{
     $msg = "<div class='alert alert-warning mt-3'>Not Changed</div>";
   }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Change Password</h3>
<form action="" method="GET" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Student</label>
        <input type="text" class="form-control" name="stu" id="stu" value="<?php echo $_SESSION['email']?>" readonly>
    </div>
    <div class="form-group">
        <label for="">New Password</label>
        <input type="password" class="form-control" name="stu_pass" id="stu_pass">
    </div>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-danger" id="changePassBtn" name="changePassBtn">Submit</button>
        <a href="stuDashboard.php" class="btn btn-secondary">Close</a>
    </div>
    <?php
      
         if(isset($msg)){ echo $msg;}
    ?>
</form>
</div>

<?php 
include('./studentInclude/footer.php');
?>