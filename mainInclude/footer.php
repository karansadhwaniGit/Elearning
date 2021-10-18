<!-- Footer -->
<div class="container-fluid bg-dark text-center p-2">
<small class="text-white">Copyright &copy; 2020 || Designed By E-Learning || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin Login</a> </small>
</div>
<!-- /Footer -->
<!-- stu registartion modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registratione</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php include('./studentRegistration.php') ?>
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
      <button type="button" class="btn btn-primary" onclick="addstu()" id="signup">Signup</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- /modal -->

<!-- /registration model -->
   <!--student login -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php include('./studentLogin.php') ?>
      </div>
      <div class="modal-footer">
      <span id="loginMsg"></span>
      <button type="button" class="btn btn-primary" onclick="loginstu()" id="stuLoginBtn">Log In</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
   <!--/student login -->
<!-- admin Login -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="adminLoginForm"> 
      <div class="mb-3">
  
  <div class="mb-3">
    <i class= "fas fa-envelope"></i>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <span id="loginMsg1"></span>
    <input type="email" class="form-control" id="adminLogemail" name="adminLogemail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <i class= "fas fa-key"></i>
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <span id="loginMsg2"></span>
    <input type="password" class="form-control" id="adminLogpass" name="adminLogpass">
  </div>

  </form>
      </div>
      <div class="modal-footer">
      <span id="adminloginMsg"></span>
      <button type="button" class="btn btn-primary" onclick="loginadmin()" id="adminLoginBtn">Log In</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /admin Login -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/ajaxrequest.js"></script> 
    <script src="js/ajaxadminrequest.js"></script> 
  <!-- console.log("hi"); -->
  

</body>
</html>