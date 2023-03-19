<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login_asset/fonts/icomoon/style.css">

    <link rel="stylesheet" href="login_asset/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login_asset/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="login_asset/css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Login</title>
  </head>
  <body>
  

  <?php

        if (isset($_GET['test'])) {

          ?>

              <script>

                swal({
                  title: "Good job!",
                  text: "You clicked the button!",
                  icon: "success",
                  button: "Aww yiss!",
                });

                setTimeout(function(){
                        window.location="user/index.php";
                       }, 2000);
              </script>


          <?php
          
        }

  ?>
  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="login_asset/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3><strong>DESA SINGAPADU TENGAH SUKAWATI</strong></h3>
              <p class="mb-4">Selamat datang di aplikasi Penukaran sampah, Silahkan Login dengan akun anda</p>
            </div>
            <form action="Action_front/loginproses.php" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
              
                  
                </label>
 
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="login_asset/js/jquery-3.3.1.min.js"></script>
    <script src="login_asset/js/popper.min.js"></script>
    <script src="login_asset/js/bootstrap.min.js"></script>
    <script src="login_asset/js/main.js"></script>
  </body>
</html>
