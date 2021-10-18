<?php 
include("./Admininclude/header.php");
include("../dbConnection.php");

session_start();
if(!isset($_SESSION['admin_is_login'])){
    $msg = "<div class='alert alert-warning mt-3'>Not Logged In</div>";
}
?>

<div class="col-sm-9 mt-5 mb-3">
    <form action="" method="GET" class="mt-3 form-inline d-print-none">
        <div class="form-group mr-3">
        <label for="">Enter Course ID: </label>
        <input type="text" class="form-control ml-3" name="checkid" id="checkid">
        </div>
        <button type="submit" name="lessonSearch" class="btn btn-danger">Search</button>
    </form>
<?php 
if(isset($_REQUEST['lessonSearch'])){
    $sql = "SELECT course_id FROM course";
$result =  $conn->query($sql);
while($row=$result->fetch_assoc()){
    if(isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['course_id']){
        $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['checkid']}";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        if($row['course_id'] == $_REQUEST['checkid']){
            $_SESSION['course_id'] = $row['course_id'];
            $_SESSION['course_name'] = $row['course_name'];
        ?>
<?php
        }
    }
}

}
?>
<h3 class='text-dark'>Course ID: <?php if(isset($_SESSION['course_id'])){ echo $_SESSION['course_id'];}  if(isset($_SESSION['course_name'])){ echo " COURSE NAME:". $_SESSION['course_name'];} ?></h3>
<?php
if(isset($_SESSION['course_id'])){
    $sql = "SELECT * FROM lesson where course_id = {$_SESSION['course_id']}";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
?>
    <table class="table">
    <thead>
    <tr>
    <th scope="col">Lesson Id</th>
    <th scope="col">Name</th>
    <th scope="col">Decs</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php while($row=$result->fetch_assoc()){ ?>
    <tr>
    <th scope='row'><?php echo $row['lesson_id']?></th>
    <td><?php echo $row['lesson_name']?></td>
    <td><?php echo $row['lesson_decs']?></td>
    <td>
    <form action="editLesson.php" method="GET" class='d-inline'>
    <input type="hidden" name="id" value="<?php echo $row['lesson_id'] ?>">
    <button type="submit" class="btn btn-info mr-3"
    name="view" value="View">
    <i class="fas fa-pen"></i>
    </button>
    </form>

    <form action="" method="GET" class='d-inline'>
    <input type="hidden" name="id" value="<?php echo $row['lesson_id'] ?>">
    <button type="submit" class="btn btn-secondary mr-3"
    name="delete" value="Delete" id="delete">
    <i class="far fa-trash-alt"></i>
    </button>
    </form>
    </td>
    </tr>
<div>
<a href="./addLessons.php" class="btn btn-danger box">
<i class="fas fa-plus fa-2x"></i>
</a>
</div>
<?php
}
}
}
if(isset($_REQUEST['delete'])){
    $sql="DELETE FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
    
    if($conn->query($sql)== "TRUE"){
    // location.window.href= "Location:".$_SERVER['PHP_SELF'];
    }else{
        echo "Not Deleted";
    }
}
?>
</div>
</div>

<?php 
include("./Admininclude/footer.php");
?>