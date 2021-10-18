<?php
    include("./mainInclude/header.php");
    include("./dbConnection.php");
?>
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/coursebanner.jpg" alt="courses" 
         style="height:500px;width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>

<!-- Start Main content -->
    <div class="container mt-5">
    <?php 
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
$sql = "SELECT * FROM course WHERE course_id = '$id'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
?>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $row['course_img'];?>" alt="" class="card-img-top" alt="Guitar">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-title">Course Name: <?php echo $row['course_name'];?></div>
                    <div class="card-text">Description : <?php echo $row['course_desc'];?></div>
                    <p class="card-text">Duration :<?php echo $row['course_duration'];?></p>
                    <form action="" method="post">
                        <p class="card-text d-inline">Price: <Small><del>&#8377 <?php echo $row['course_original_price'];?></del></Small> <span class="font-weight-bolder">&#8377 <?php echo $row['course_price'];?></span></p>
                        <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
}
}  
    ?>
    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th scope="col">Lesson No.</th>
                    <th scope="col">Lesson Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <th scope="row">1</th>
                        <td>Introduction</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<!-- End Main content -->

<?php
    include("./mainInclude/footer.php");
?>