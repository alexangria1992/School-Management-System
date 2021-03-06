<!-- footer -->

<footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &copy; 2019 || Designed By E-Learning || <a href="#login" data-toggle="modal"
        data-target="#adminLoginModalCenter">Admin Login</a> </small>
    </footer>
    <!-- Optional JavaScript -->
    

 

    <!-- Modal -->
    <div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <!-- Start Student Registration form -->

         <?php include('studentRegistration.php')?>   

        </div>

        <div class="modal-footer">
            <span id="successMsg"></span>
            <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
        <!-- start student login-->

    <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <!-- Start Student Login Form -->

        <form id="stuLoginForm">
    
        <div class="form-group">
            <i class="fas fa-envelope"></i><label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label>
            <input type="email" class="form-control" id="stuLogEmail" name="stuLogEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
            <input type="password" class="form-control" id="stuLogPass" name="stuLogPass" placeholder="Password">
           
        </div> 
        </form>        
        </div>
        <div class="modal-footer">
        <small id="statusLogMsg"></small>
             <button type="button" class="btn btn-primary" id="studentLoginBtn" onclick="checkStuLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </div>
    </div>
    </div>



    <!-- Admin login-->
    <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <!-- Start Admin Login Modal -->

        <form id="adminLoginForm">
    
        <div class="form-group">
                <i class="fas fa-envelope"></i><label for="adminLogEmail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="adminLogEmail" id="adminLogEmail">
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="adminLogPass" class="pl-2 font-weight-bold">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="adminLogPass" id="adminLogPass">
                </div>
        </form>        
        </div>
        <div class="modal-footer">
              <small id="statusAdminLogMsg"></small>
              <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </div>
    </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/all.min.js"></script>
    <script src="js/owl.min.js" type="text/javascript"></script>
    <script src="js/testyslider.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/ajaxrequest.js"></script>
    <script type="text/javascript" src="js/adminajaxrequest.js"></script>

  </body>
</html>