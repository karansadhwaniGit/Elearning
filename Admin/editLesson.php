<?php 
include("./Admininclude/header.php");
include("../dbConnection.php");


if(isset($_REQUEST['lessonEditBtn'])){
    if(($_REQUEST['lesson_name'] == " ") || ($_REQUEST['lesson_decs']== "")){

        $msg="<div class='alert alert-warning mt-3'>Fill All Fields</div>";
    }
    else{
        $lesson_id=$_REQUEST['l_id'];
        $course_id = $_REQUEST['c_id'];
        $course_name = $_REQUEST['c_name'];
        $lesson_name = $_REQUEST['lesson_name'];
        $lesson_desc = $_REQUEST['lesson_decs'];

        $sql = "UPDATE lesson SET lesson_name = '$lesson_name', lesson_decs = '$lesson_desc' WHERE lesson_id = '$lesson_id'";

         if($conn->query($sql)){
        $msg = "<div class='alert alert-warning mt-3'>Course Updated</div>";
        }else{
        $msg="<div class='alert alert-warning mt-3'>Course Not Updated</div>";
        }
    }
}


?>



<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Edit Course</h3>
    <?php 
    if(isset($_REQUEST['view'])){
    $sql = "SELECT * FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
    $result=$conn->query($sql);
    
    $row=$result->fetch_assoc();
    } 

    ?>
    <form action="" method="GET" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Lesson Id</label>
        <input type="text" class="form-control" name="l_id" value="<?php echo $row['lesson_id'] ?>" readonly>
    </div>
    <div class="form-group">
        <label for="">Course Id</label>
        <input type="text" class="form-control" name="c_id" value="<?php echo $row['course_id'] ?>" readonly>
    </div>
    <div class="form-group">
        <label for="">Course Name</label>
        <input type="text" class="form-control" name="c_name" value="<?php echo $row['course_name'] ?>" readonly>
    </div>
    <div class="form-group">
        <label for="">Lesson Name</label>
        <input type="text" name="lesson_name" class="form-control" value="<?php echo $row['lesson_name'] ?>">
    </div>
    <div class="form-group">
        <label for="">Lesson Description</label>
        <input type="text" name="lesson_decs" class="form-control" value="<?php echo $row['lesson_decs'] ?>">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger" id="lessonEditBtn" name="lessonEditBtn">Submit</button>
        <a href="lessons.php" class="btn btn-secondary">Close</a>
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