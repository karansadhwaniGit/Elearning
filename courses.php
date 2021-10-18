<?php 
include ("./mainInclude/header.php");
include ("dbConnection.php");
?>

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/coursebanner.jpg" alt="" style="height:500px; width:100%; object-fit:cover; box-shadow:10px">
    </div>
</div>
<!-- most populor course -->
<div class="container mt-5">
            <h3 class="text-center">All Course</h3>
                <!-- first card deck -->
<div class="card-group">
<?php 
$sql = "SELECT * FROM course";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
?>
<div class="card">
  <img src="<?php echo $row["course_img"]?>" height="300px" width="185px" class=card-img-top alt="Guitar">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $row["course_name"]; ?>
                    </h5>
                        <p class="card-text">
                            <?php echo $row["course_desc"]; ?>
                        </p>
        </div>
        <div class="card-footer">
            <p class="cart-text d-inline">
                Price: <small><del>&#8377 <?php echo $row["course_original_price"]; ?></del></small>
                <span class="font-weight-bolder">
                &#8377 <?php echo $row["course_price"]; ?>
                </span>
            </p>
            <a href="./coursedetail.php" class="btn btn-primary text-white font-weight-bolder" style="float:right;">Enroll</a>
        </div>
</div>
 <?php 
}
 ?> 
<div class="card-group">

<?php 
$sql = "SELECT * FROM course";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
?>
<div class="card">
  <img src="<?php echo $row["course_img"]?>" height="300px" width="185px" class=card-img-top alt="Guitar">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $row["course_name"]; ?>
                    </h5>
                        <p class="card-text">
                            <?php echo $row["course_desc"]; ?>
                        </p>
        </div>
        <div class="card-footer">
            <p class="cart-text d-inline">
                Price: <small><del>&#8377 <?php echo $row["course_original_price"]; ?></del></small>
                <span class="font-weight-bolder">
                &#8377 <?php echo $row["course_price"]; ?>
                </span>
            </p>
            <a href="./coursedetail.php" class="btn btn-primary text-white font-weight-bolder" style="float:right;">Enroll</a>
        </div>
</div>
<?php 
}
?>
</div>
<!-- /most populor course -->

<?php 
    include ("./mainInclude/footer.php");
?>