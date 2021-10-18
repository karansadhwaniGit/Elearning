<?php 
include("./Admininclude/header.php");
include("../dbConnection.php");
?>

<div class="col-sm-9 mt-5">
    <p class="bg-dark text-white p-2">List Of students</p>
    <?php 
    $sql = "SELECT * FROM student";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
    ?>
    <table class="table">
    <thead>
    <tr>
    <th scope="col">student Id</th>
    <th scope="col">Name</th>
    <th scope="col">email</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php while($row=$result->fetch_assoc()){ ?>
    <tr>
    <th scope='row'><?php echo $row['stu_id']?></th>
    <td><?php echo $row['stu_name']?></td>
    <td><?php echo $row['stu_email']?></td>
    <td>
    <form action="editstudent.php" method="POST" class='d-inline'>
    <input type="hidden" name="id" value="<?php echo $row['stu_id'] ?>">
    <button type="submit" class="btn btn-info mr-3"
    name="view" value="View">
    <i class="fas fa-pen"></i>
    </button>
    </form>

    <form action="" method="GET" class='d-inline'>
    <input type="hidden" name="id" value="<?php echo $row['stu_id'] ?>">
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
if(isset($_POST['delete'])){
    $sql="DELETE FROM student WHERE stu_id = {$_REQUEST['id']}";
    
    if($conn->query($sql)== "TRUE"){
        header("Location:".$_SERVER['PHP_SELF']);
    }else{
        echo "Not Deleted";
    }
}
?>
<div>
<a href="./addstudent.php" class="btn btn-danger box">
<i class="fas fa-plus fa-2x"></i>
</a>
</div>
<?php 
include("./Admininclude/footer.php");
?>
