<?php 
include("./Admininclude/header.php");
include("../dbConnection.php");

session_start();
if(!isset($_SESSION['admin_is_login'])){
    $msg = "<div class='alert alert-warning mt-3'>Not Logged In</div>";
}
if(isset($_REQUEST['changePassBtn']) && isset($_REQUEST['admin_pass'])){
    $admin = $_SESSION['email'];
    $pass = $_REQUEST['admin_pass'];
    $sql = "UPDATE adm SET admin_pass = 'newpass' WHERE admin_email = 'simran@gmail.com'";

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
        <label for="">Admin</label>
        <input type="text" class="form-control" name="admin" id="admin" value="<?php echo $_SESSION['email']?>" readonly>
    </div>
    <div class="form-group">
        <label for="">New Password</label>
        <input type="password" class="form-control" name="admin_pass" id="admin_pass">
    </div>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-danger" id="changePassBtn" name="changePassBtn">Submit</button>
        <a href="adminDashboard.php" class="btn btn-secondary">Close</a>
    </div>
    <?php
      
         if(isset($msg)){ echo $msg;}
    ?>
</form>
</div>

<?php 
include("./Admininclude/footer.php");
?>