<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CREDOM</title>

    <!-- <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">

	<link rel="icon" href="images/fav.gif" type="image/gif" sizes="16x16">
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
         
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="text-center">
                <a href="index.php" class="logo"><img src="assets/images/logo.png"></a>
              </div>
              <div class="auto-form-wrapper">
                <form action="#">
                  <div class="form-group">
                    <label class="label">Username</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Username">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-envelope-o"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-key"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>
                  <div class="form-group d-flex justify-content-between">
                    
                  <div class="form-check form-check-flat mt-0 pl-0 mb-0">
                        <div class="form-check form-check-flat mt-0">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Keep me signed in <i class="input-helper"></i></label>
                      </div>
                    </div>

                    <a href="javascript:void(0)" data-toggle="modal" data-target="#forgotPassword" class="text-small forgot-password text-black">Forgot Password</a>
                  </div>

                  <div class="form-group">
                    <!-- <button class="btn btn-block g-login">
                      <img class="mr-3" src="../assets/images/file-icons/icon-google.svg" alt="">Log in with Google</button> -->
                  </div>
                  <div class="text-block text-center my-3">
                    <!-- <span class="text-small font-weight-semibold">Not a member ?</span>
                    <a href="register.php" class="text-black text-small">Create new account</a> -->
                  </div>
                </form>
              </div>
              <ul class="auth-footer">
                <li>
                  <a href="#">Conditions</a>
                </li>
                <li>
                  <a href="#">Help</a>
                </li>
                <li>
                  <a href="#">Terms</a>
                </li>
              </ul>
              <p class="footer-text text-center">Copyright © 2020 CREDOM. All rights reserved.</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    
<!-- Modal -->
<div class="modal fade custom-modal modal-dashboard" id="forgotPassword" tabindex="-1" aria-labelledby="forgotPasswordLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forgotPasswordLabel">Forgot your password?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
        <label class="label">Enter your email</label>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Email">
            <div class="input-group-append">
            <span class="input-group-text">
                <i class="mdi mdi-check-circle-outline"></i>
            </span>
            </div>
        </div>
        </div>
      </div>

      <div class="form-group text-center">
        <button type="submit" class="btn btn-outline-primary custom-blue" data-dismiss="modal">REQUEST RESET LINK</button>
      </div>

    </div>
  </div>  
</div>

    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>