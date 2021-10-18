<?php 
include('./studentInclude/header.php');
include('../dbConnection.php');

if(isset($_REQUEST['myProfileUpdate'])){
    $email = $_SESSION['email'];
    $occ = $_REQUEST['stu_occ'];
    $sql = "UPDATE student SET stu_occ ='$occ' WHERE stu_email = '$email'";
    $result = $conn->query($sql);
    if($result == "TRUE"){
    $msg =  "<div>Updated Succesfully</div>";
    }else if($result == "FALSE"){
    $msg =  "<div>Not Updated Succesfully</div>";
    }
}

if(isset($_SESSION['is_login']) && isset($_SESSION['email'])){
$email = $_SESSION['email'];
$sql = "SELECT * FROM student WHERE stu_email = '$email'";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Student Profile</h3>
    <form action="" method="GET" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Student Id</label>
        <input type="text" class="form-control" readonly name="stu_id" value ="<?php echo $row['stu_id']?>">
    </div>
    <div class="form-group">
        <label for="">Student Name</label>
        <input type="text" name="stu_name" readonly class="form-control" value ="<?php echo $row['stu_name']?>">
    </div>
    <div class="form-group">
        <label for="">Student Email</label>
        <input type="text" name="stu_email" readonly class="form-control" value ="<?php echo $row['stu_email']?>">
    </div>
    <div class="form-group">
        <label for="">Student Occupation</label>
        <input type="text" name="stu_occ" class="form-control" value ="<?php echo $row['stu_occ']?>">
    </div> <br>
    <div class="text-center">
        <button type="submit" class="btn btn-danger" id="myProfileUpdate" name="myProfileUpdate">Update</button>
    </div>
    </form>
    <div class="msg"><?php if(isset($msg)){echo $msg;}?></div>
</div>
</div>
</div>
<?php 
}
include('./studentInclude/footer.php');
?>