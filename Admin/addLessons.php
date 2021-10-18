<?php 
include("./Admininclude/header.php");
include("../dbConnection.php");
session_start();
if(!isset($_SESSION['admin_is_login'])){
    $msg = "<div class='alert alert-warning mt-3'>Not Logged In</div>";
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Lesson</h3>
    <form action="" method="GET" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Course Id</label>
        <input type="text" class="form-control" value="<?php echo $_SESSION['course_id'] ?>" readonly>
    </div>
    <div class="form-group">
        <label for="">Course Name</label>
        <input type="text" class="form-control" value="<?php echo $_SESSION['course_name'] ?>" readonly>
    </div>
    <div class="form-group">
        <label for="">Lesson Name</label>
        <input type="text" name="lesson_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Lesson Description</label>
        <input type="text" name="lesson_desc" class="form-control">
    </div>
    <div class="form-group">
        <label for="" >Lesson Video</label>
        <input type="file" name="lesson" id="lesson" class="form-control-file">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger" id="lessonSubmitBtn" name="lessonSubmitBtn">Submit</button>
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
if(isset($_REQUEST['lessonSubmitBtn'])){
    if(($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc']== "") || ($_REQUEST['lesson']== "")){

        $msg="<div class='alert alert-warning mt-3'>Fill All Fields</div>";
    }
    else{
        $course_id = $_SESSION['course_id'];
        $course_name = $_SESSION['course_name'];
        $lesson_name = $_REQUEST['lesson_name'];
        $lesson_desc = $_REQUEST['lesson_desc'];
        
        $lesson_vid= $_FILES['lesson']["name"];
        $lesson_vid_temp = $_FILES['lesson']['tmp_name'];
        echo $_FILES['lesson']["name"];
        $vid_folder= '../lessonvideos/'.$lesson_vid;
        move_uploaded_file($lesson_vid_temp,$vid_folder);

        $sql = "INSERT INTO lesson(lesson_name, lesson_desc, lesson_link, course_id, course_name)
        VALUES ('$lesson_name','$lesson_desc','$vid_folder','$course_id','$course_name')";

        if($conn->query($sql) == "TRUE"){
        $msg="<div class='alert alert-warning mt-3'>lesson Added</div>";
        }else{
        $msg="<div class='alert alert-warning mt-3'>lesson Not Added</div>";
        }
    }
}

include("./Admininclude/footer.php");
?>