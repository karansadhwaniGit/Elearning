<?php 
include('./studentInclude/header.php');
if(!isset($_SESSION['is_login'])){
    $msg = "<div class='alert alert-warning mt-3'>Not Logged In</div>";
}
if(isset($_REQUEST['feedbackSubmit']) && isset($_REQUEST['stu_fb'])){
    $fb = $_REQUEST['stu_fb'];
    $stu = $_SESSION['email'];
    $sql = "INSERT INTO feeddback (f_content,stu_email) VALUES('$fb','$stu')";
   if($conn->query($sql)){
     $msg = "<div class='alert alert-warning mt-3'>Uploaded</div>";
   }
   else{
     $msg = "<div class='alert alert-warning mt-3'>Not Uploaded </div>";
   }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Feedback</h3>
<form action="" method="GET" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Student Email</label>
        <input type="text" class="form-control" name="stu" id="stu" value="<?php echo $_SESSION['email']?>" readonly>
    </div>
    <div class="form-group">
        <label for="">Feedback</label>
        <input type="text" class="form-control" name="stu_fb" id="stu_fb">
    </div>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-danger" id="feedbackSubmit" name="feedbackSubmit">Submit</button>
        <a href="studentProfile.php" class="btn btn-secondary">Close</a>
    </div>
    <?php
      
         if(isset($msg)){ echo $msg;}
    ?>
</form>
</div>

<?php 
include('./studentInclude/footer.php');
?>