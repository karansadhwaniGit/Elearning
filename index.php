<?php 
include ("./mainInclude/header.php");
include ("./dbConnection.php");
?>
        <!--/end navigation  -->
        <!-- start video back -->
            <div class="container-fluid remove-vid-margin">
                <div class="vid-parent">
                    <video playsinline autoplay muted loop>
                        <source src="video/vid.mp4"> 
                    </video>
                    <div class="vid-overlay"></div>
                    <div class="vid-content">
                        <h1 class="my-content">Welcome to OSchool</h1>
                        <small class="my-content">Learn and Implement</small>
                        <br>

                        <?php 
                        if(isset($_SESSION["is_login"])){
                            echo '<a href="./Student/studentProfile.php" class="btn btn-primary" >My Profile</a>';
                        }else{
                            echo '<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
         <!-- /end video back -->
         <!-- Start text banner -->
         <div class="container-fluid bg-danger txt-banner">
            <div class="row bottom-banner">
                <div class="col-sm">
                    <h5><i class="fas fa-book-open mr-3"></i>100 + Online Courses</h5>
                </div>
                <div class="col-sm">
                    <h5><i class="fas fa-users mr-3"></i>Expert Instruction</h5>
                </div>
                <div class="col-sm">
                    <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
                </div>
                <div class="col-sm">
                    <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Gurantee</h5>
                </div>

            </div>
         </div>
        <!-- end text banner -->
        <!-- start most popular course -->
            <div class="container mt-5">
            <div class="text-center">Popular Course</div>
                <!-- first card deck -->
                <div class="card-group">

<?php 
$sql = "SELECT * FROM course";
$result = $conn->query($sql);
// die(var_dump($result));
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
            <form action="coursedetail.php" method="GET">
        <input type="hidden" name="id" value="<?php $row['course_id']?>">
        <input type="submit" href="./coursedetail.php" class="btn btn-primary text-white font-weight-bolder" style="float:right;" value="Enrol">
        </form>
    </div>
</div>

<?php 
}
?>
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
        <form action="" method="get">
        <input type="hidden" name="id" value="<?php $row['course_id']?>">
        <a href="./coursedetail.php" class="btn btn-primary text-white font-weight-bolder" style="float:right;">Enroll</a>
        </form>
        </div>
</div>

<?php 
}
?>

</div>

<div class="text-center m-2">
            <a class="btn btn-danger btn-sm" href="courses.php">View All Courses</a>
        </div>

        <!-- end most popular course -->
        <!-- contact Us -->
        <?php
        include("./contact.php");
        ?>
        <!-- /contact Us -->
<div class="container-fluid bg-danger">
    <div class="row text-white text-center p-1">
        <div class="col-sm">
            <a href="#" style="text-decoration:none;" class="text-white social-hover"><i class="fab fa-facebook"></i>Facebook</a>
        </div>            
        <div class="col-sm">
            <a href="#" style="text-decoration:none;" class="text-white social-hover"><i class="fab fa-twitter"></i>Twitter</a>
        </div>            
        <div class="col-sm">
            <a href="#" style="text-decoration:none;" class="text-white social-hover"><i class="fab fa-whatsapp"></i>Whatsapp</a>
        </div>            
        <div class="col-sm">
            <a href="#" style="text-decoration:none;" class="text-white social-hover"><i class="fab fa-instagram"></i>Instagram</a>
        </div>            
    </div>
</div>
<div class="container-fluid p-4" style="background-color: #e9ecef">
    <div class="container" style="background-color: #e9ecef">
        <div class="row text-center">
            <div class="col-sm">
                <h5>About Us</h5>
                <p>oSchool provides universal access to the world's best 
                education partnering wit top universities and 
                organizations to offer courses online.</p>
            </div>
            <div class="col-sm">
            <h5>Category</h5>
            <a class="text-dark" style="text-decoration:none;" href="#">Web Development</a><br>
            <a class="text-dark" style="text-decoration:none;" href="#">Web Designing</a><br>
            <a class="text-dark" style="text-decoration:none;" href="#">Android App Dev</a><br>
            <a class="text-dark" style="text-decoration:none;" href="#">iOS Development</a><br>
            <a class="text-dark" style="text-decoration:none;" href="#">Data Analysis</a><br>
            </div>
            <div class="col-sm">
            <h5>Contact Us</h5>
            <p>oSchool Pvt Ltd <br> OT Section <br>Ulasnagar-421003 <br>Phone: +4561245</p>
            </div>
        </div>
    </div>
</div>
<?php 
include ("./mainInclude/footer.php");
?>