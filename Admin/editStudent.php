<?php 
include("./Admininclude/header.php");
include("../dbConnection.php");

if(isset($_REQUEST['stuEditBtn'])){
    if(($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email']== "") || ($_REQUEST['stu_pass']== "")){

        $msg="<div class='alert alert-warning mt-3'>Fill All Fields</div>";
    }
    else{
        $stu_id = $_REQUEST['stu_id'];
        $stu_name = $_REQUEST['stu_name'];
        $stu_email = $_REQUEST['stu_email'];
        $stu_pass = $_REQUEST['stu_pass'];
        $stu_occ = $_REQUEST['stu_occ'];
            $sql = "UPDATE student SET stu_name = '$stu_name', stu_email = '$stu_email', stu_pass = '$stu_pass', stu_occ = '$stu_occ'
         WHERE stu_id = '$stu_id'";
        
         if($conn->query($sql)){
        $msg = "<div class='alert alert-warning mt-3'>Course Updated</div>";
        echo "<script>window.location.href='students.php'</script>";
        }else{
        $msg="<div class='alert alert-warning mt-3'>Course Not Updated</div>";
        }
    }
}
?>





<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Edit Student Details</h3>
    <?php 
    if(isset($_REQUEST['view'])){
    $sql = "SELECT * FROM student WHERE stu_id = {$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    } 

    ?>
    <form action="" method="GET" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Student Id</label>
        <input type="text" class="form-control" name="stu_id" id="stu_id" value="<?php echo $row['stu_id']?>" readonly>
    </div>
    <div class="form-group">
        <label for="">Student Name</label>
        <input type="text" class="form-control" name="stu_name" id="stu_name" value="<?php echo $row['stu_name']?>">
    </div>
    <div class="form-group">
        <label for="">Student Email</label>
        <input type="text" class="form-control" name="stu_email" id="stu_email" value="<?php echo $row['stu_email']?>">
    </div>
    <div class="form-group">
        <label for="">Student Password</label>
        <input type="text" name="stu_pass" class="form-control" value="<?php echo $row['stu_pass']?>" id="stu_pass">
    </div>
    <div class="form-group">
        <label for="">Occupation</label>
        <input type="text" name="stu_occ" class="form-control" id="stu_occ" value="<?php echo $row['stu_occ']?>">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger" id="stuEditBtn" name="stuEditBtn">Submit</button>
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