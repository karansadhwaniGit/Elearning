<?php 
include("./Admininclude/header.php");
?>
        <div class="col-sm-9 mt-5">
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-5" style="max-width:18rem;">
                            <div class="card-header">Courses</div>
                            <div class="card-body">
                                <div class="card-title">
                                    5
                                </div>
                                <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-primary mb-5" style="max-width:18rem;">
                            <div class="card-header">Students</div>
                            <div class="card-body">
                                <div class="card-title">
                                    3
                                </div>
                                <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-5" style="max-width:18rem;">
                            <div class="card-header">Sold</div>
                            <div class="card-body">
                                <div class="card-title">
                                    1
                                </div>
                                <a href="#" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-wite p-2">Course Ordered</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Course ID</th>
                                <th scope="col">Student Email</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scopr="row">22</th>
                            <td>100</td>
                            <td>karan@gmail.com</td>
                            <td>19/10/2020</td>
                            <td>2000</td>
                            <td><button type="submit" class="btn btn-primary" name="delete" value="delete">
                                <i class="far fa-trash-alt"></i>
                            </button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php 
include("./Admininclude/footer.php");
?>
