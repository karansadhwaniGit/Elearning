<?php 
include("./Admininclude/header.php");
include("../dbConnection.php");
?>

<div class="col-sm-9 mt-5">
    <p class="bg-dark text-white p-2">List Of Courses</p>
    <?php 
    $sql = "SELECT * FROM course";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
    ?>
    <table class="table">
    <thead>
    <tr>
    <th scope="col">Course Id</th>
    <th scope="col">Name</th>
    <th scope="col">Author</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php while($row=$result->fetch_assoc()){ ?>
    <tr>
    <th scope='row'><?php echo $row['course_id']?></th>
    <td><?php echo $row['course_name']?></td>
    <td><?php echo $row['course_author']?></td>
    <td>
    <form action="editCourse.php" method="GET" class='d-inline'>
    <input type="hidden" name="id" value="<?php echo $row['course_id'] ?>">
    <button type="submit" class="btn btn-info mr-3"
    name="view" value="View">
    <i class="fas fa-pen"></i>
    </button>
    </form>

    <form action="" method="GET" class='d-inline'>
    <input type="hidden" name="id" value="<?php echo $row['course_id'] ?>">
    <button type="submit" class="btn btn-secondary mr-3"
    name="delete" value="Delete" id="delete">
    <i class="far fa-trash-alt"></i>
    </button>
    </form>
    </td>
    </tr>
    <?php } ?>

    </tbody>
    </table>
    <?php }else{
        echo "0 records";
    } ?>
</div>
</div>
<?php 
if(isset($_REQUEST['delete'])){
    $sql="DELETE FROM course WHERE course_id = {$_POST['id']}";
    
    if($conn->query($sql)== "TRUE"){
        header("Location:".$_SERVER['PHP_SELF']);
    }else{
        echo "Not Deleted";
    }
}
?>
<div>
<a href="./addCourse.php" class="btn btn-danger box">
<i class="fas fa-plus fa-2x"></i>
</a>
</div>
<?php 
include("./Admininclude/footer.php");
?>
