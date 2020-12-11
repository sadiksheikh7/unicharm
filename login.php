<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CREDOM</title>

    <!-- <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">

	<link rel="icon" href="images/fav.gif" type="image/gif" sizes="16x16">
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
         
          <div class="row w-100">
            <div class="main-login">
              
              <div class="auto-form-wrapper">
              <div class="text-center">
                <a href="index.php" class="logo"><img src="assets/images/logo-blue.gif"></a>
              </div>
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
                    <!-- <button class="btn btn-primary submit-btn btn-block">Login</button> -->
                    <a href="index.php" class="btn custom-blue btn-block"><i class="fa fa-lock"></i> Sign In</a>
                  </div>
                  <div class="form-group">
                    
                    <div class="form-check form-check-flat mt-0 pl-0 mb-0">
                      <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me <i class="input-helper"></i></label>
                    </div>
                      <hr>

                    </div>

                    <div class="text-center">
                      <a href="javascript:void(0)" data-toggle="modal" data-target="#forgotPassword" class="text-small forgot-password text-black font-14">I forgot my password</a>
                    </div>
                  </div>
                </form>
              </div>
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

<script type="text/javascript" src="assets/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/popper.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/bootstrap.min.js"></script>
  </body>
</html>