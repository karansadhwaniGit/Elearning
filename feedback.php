

<section id="banner-area" class="bg-light">
    <div class="owl-carousel owl-theme" style="padding:20px">
        <?php
            include ("./mainInclude/header.php");
            include("./dbconnection.php");
            $sql="SELECT * FROM feeddback";
            $result = $conn->query($sql);
            $row=$result->fetch_assoc();
            while($row=$result->fetch_assoc()){

?>
    <div class="item">
    <!-- <h3 class="text-center text-secondary mt-2">FEEDBACKS FROM STUDENTS</h3> -->
        <div class="card bg-black text-white pt-10" style="width:25rem;margin:50px 0;padding:20px">
            <!-- <img src=""  class="rounded-circle"  style="width:80px!important;height:70px;"  alt="..."> -->
                <div class="card-body">
                    <!-- <h5 class="card-title">NAME: </h5> -->
                    <p class="card-text text-warning">REVIEW: <?php echo $row['f_content']; ?></p>
                    <a href="./student/stuFeedback.php" class="btn btn-primary">Write A Review</a>
                </div>
            </div>                
        </div>
        <?php
            }
        ?>
    </div>
</section>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- owl-carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- isotope -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
    <!-- custom css -->
    <script src="./js/ajaxrequest.js"></script>
</body>
</html>