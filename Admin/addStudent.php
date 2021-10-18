<?php 
include("./Admininclude/header.php");
include("../dbConnection.php");

if(isset($_POST['stuSubmitBtn'])){
    if(($_POST['stu_name'] == "") || ($_POST['stu_email']== "") || ($_POST['stu_pass']== "")){

        $msg="<div class='alert alert-warning mt-3'>Fill All Fields</div>";
    }
    else{
        $stu_name = $_POST['stu_name'];
        $stu_email = $_POST['stu_email'];
        $stu_pass = $_POST['stu_pass'];
        $stu_occ = $_POST['stu_occ'];
        $stu_img= $_FILES['stu_img']["name"];
        $stu_img_temp = $_FILES['stu_img']['tmp_name'];
        $img_folder= '../images/studentImg/'.$stu_img;
        move_uploaded_file($stu_img_temp,$img_folder);

        $sql = "INSERT INTO student ( stu_name, stu_email, stu_pass,stu_occ,stu_img)
        VALUES ('$stu_name','$stu_email','$stu_pass','$stu_occ','$stu_img')";

        if($conn->query($sql)){
        $msg="<div class='alert alert-warning mt-3'>Student Added</div>";
        }else{
        $msg="<div class='alert alert-warning mt-3'>Student Not Added</div>";
        }
    }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Student Name</label>
        <input type="text" class="form-control" name="stu_name" id="stu_name">
    </div>
    <div class="form-group">
        <label for="">Student Email</label>
        <input type="text" name="stu_email" class="form-control" id="stu_email">
    </div>
    <div class="form-group">
        <label for="">Student Password</label>
        <input type="text" name="stu_pass" class="form-control" id="stu_pass">
    </div>
    <div class="form-group">
        <label for="">Student Occupation</label>
        <input type="text" name="stu_occ" class="form-control" id="stu_occ">
    </div>
    <div class="form-group">
        <label for="" >Course Image</label>
        <input type="file" name="stu_img" class="form-control-file" id="stu_img">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger" id="stuSubmitBtn" name="stuSubmitBtn">Submit</button>
        <a href="courses.php" class="btn btn-secondary">Close</a>
    </div>
    <?php 
         if(isset($msg)){ echo $msg;}
    ?>
    </form>
</div>
</div>
</div>
<?php 
include("./Admininclude/footer.php");
?>