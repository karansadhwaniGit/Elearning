<?php 
include ("./mainInclude/header.php");
?>
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/coursebanner.jpg" alt="" style="height:500px; width:100%; object-fit:cover; box-shadow:10px">
    </div>
</div>
<!-- payment section -->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="row form-group">
        <div>
            <label for="" class="offset-sm-3 col-form-lable">Order ID:</label>
        </div>
        <div>
            <input type="text" class="mx-3">
        </div>
        <div class="">
            <input type="submit" class="btn btn-primary mx-4" value="View">
        </div>
    </div>
    </form>
</div>
<!-- /payment section -->
<?php 
    include ("./contact.php");
?>
<?php 
    include ("./mainInclude/footer.php");
?>