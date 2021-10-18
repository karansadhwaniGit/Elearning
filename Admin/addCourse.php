<?php 
include("./Admininclude/header.php");
include("../dbConnection.php");

if(isset($_POST['courseSubmitBtn'])){
    if(($_POST['course_name'] == "") || ($_POST['course_desc']== "") || ($_POST['course_author']== "")
    || ($_POST['course_duration']=="") || ($_POST['course_original_price']=="") || ($_POST['course_selling_price']=="")){

        $msg="<div class='alert alert-warning mt-3'>Fill All Fields</div>";
    }
    else{
        $course_name = $_POST['course_name'];
        $course_desc = $_POST['course_desc'];
        $course_author = $_POST['course_author'];
        $course_duration = $_POST['course_duration'];
        $course_original_price = $_POST['course_original_price'];
        $selling_price = $_POST['course_selling_price'];
        $course_img= $_FILES['course_img']["name"];
        $course_img_temp = $_FILES['course_img']['tmp_name'];
        $img_folder= '../images/courseimg/'.$course_img;
        move_uploaded_file($course_img_temp,$img_folder);

        $sql = "INSERT INTO course ( course_name, course_desc, course_author, course_img, course_duration, course_price, course_original_price)
        VALUES ('$course_name','$course_desc','$course_author','$img_folder',
        '$course_duration','$selling_price','$course_original_price')";

        if($conn->query($sql)){
        $msg="<div class='alert alert-warning mt-3'>Course Added</div>";
        }else{
        $msg="<div class='alert alert-warning mt-3'>Course Not Added</div>";
        }
    }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Course</h3>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Course Name</label>
        <input type="text" class="form-control" name="course_name" id="course_name">
    </div>
    <div class="form-group">
        <label for="">Course Description</label>
        <input type="text" name="course_desc" class="form-control" id="course_desc">
    </div>
    <div class="form-group">
        <label for="">Author</label>
        <input type="text" name="course_author" class="form-control" id="course_author">
    </div>
    <div class="form-group">
        <label for="">Course Duration</label>
        <input type="text" name="course_duration" class="form-control" id="course_duration">
    </div>
    <div class="form-group">
        <label for="">Course Original Price</label>
        <input type="text" name="course_original_price" class="form-control" id="course_original_price">
    </div>
    <div class="form-group">
        <label for="">Course Selling Price</label>
        <input type="text" name="course_selling_price" class="form-control" id="course_selling_price">
    </div>
    <div class="form-group">
        <label for="" >Course Image</label>
        <input type="file" name="course_img" class="form-control-file" id="course_img">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger" id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
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