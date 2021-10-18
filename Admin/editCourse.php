<?php 
include("./Admininclude/header.php");
include("../dbConnection.php");


if(isset($_REQUEST['courseEditBtn'])){
    if(($_REQUEST['course_name'] == " ") || ($_REQUEST['course_desc']== "") || ($_REQUEST['course_author']== "")
    || ($_REQUEST['course_duration']=="") || ($_REQUEST['course_original_price']=="") || ($_REQUEST['course_selling_price']=="")){

        $msg="<div class='alert alert-warning mt-3'>Fill All Fields</div>";
    }
    else{
        $course_id = $_REQUEST["course_id"];
        $course_name = $_REQUEST['course_name'];
        $course_desc = $_REQUEST['course_desc'];
        $course_author = $_REQUEST['course_author'];
        $course_duration = $_REQUEST['course_duration'];
        $course_original_price = $_REQUEST['course_original_price'];
        $selling_price = $_REQUEST['course_selling_price'];
        $course_im= $_FILES['course_img']["name"];
        $img_folder= '../images/courseimg/'.$course_img;

        $sql = "UPDATE course SET course_name = '$course_name', course_desc = '$course_desc', course_author = '$course_author', course_img = '$img_folder',
         course_duration = '$course_duration', course_price = '$selling_price', course_original_price = '$course_original_price' WHERE course_id = '$course_id'";

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
    $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['id']}";
    $result=$conn->query($sql);
    
    $row=$result->fetch_assoc();
    } 

    ?>
    <form action="" method="GET" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Course Id</label>
        <input type="text" class="form-control" name="course_id" id="course_id" value="<?php echo $row['course_id']?>">
    </div>
    <div class="form-group">
        <label for="">Course Name</label>
        <input type="text" class="form-control" name="course_name" id="course_name" value="<?php echo $row['course_name']?>">
    </div>
    <div class="form-group">
        <label for="">Course Description</label>
        <input type="text" name="course_desc" class="form-control" value="<?php echo $row['course_desc']?>" id="course_desc">
    </div>
    <div class="form-group">
        <label for="">Author</label>
        <input type="text" name="course_author" class="form-control" id="course_author" value="<?php echo $row['course_author']?>">
    </div>
    <div class="form-group">
        <label for="">Course Duration</label>
        <input type="text" name="course_duration" class="form-control" value="<?php echo $row['course_duration']?>" id="course_duration">
    </div>
    <div class="form-group">
        <label for="">Course Original Price</label>
        <input type="text" name="course_original_price" class="form-control" value="<?php echo $row['course_original_price']?>" id="course_original_price">
    </div>
    <div class="form-group">
        <label for="">Course Selling Price</label>
        <input type="text" name="course_selling_price" class="form-control" id="course_selling_price" value="<?php echo $row['course_price']?>">
    </div>
    <div class="form-group">
        <label for="" >Course Image</label>
        <img src="<?php echo $row['course_img'] ?>" vlaue="<?php echo $row['course_img'] ?>" name="course_img" height="200px" width="200px" alt="">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-danger" id="courseEditBtn" name="courseEditBtn">Submit</button>
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