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


      <!-- alert jika ada email yang sama -->
        <?php

            if (isset($_GET['alert'])) {
                

              $alert = $_GET['alert'];

              if ($alert = "ada") {
                ?>

                      <script>

                      swal({
                        title: "Email Sudah Terdaftar",
                        text: "Email yang Anda inputkan sudah terdaftar dan memiliki akun, mohon cek lagi email anda",
                        icon: "warning",
                        button: "Oke !",
                      });

                      setTimeout(function(){
                        window.location="daftarketua.php";
                       }, 1500);
              

                      </script>
                <?php
              }
            }

              //cek status database
            if (isset($_GET['status'])) {

              $status = $_GET['status'];

                if ($status = "sukses") {
                 ?>
                 <script>

                              swal({
                                title: "Berhasil !",
                                text: "Akun sudah berhasil dibuat, silahkan login dan selamat datang :)",
                                icon: "success",
                                button: "Oke !",
                              });

                              setTimeout(function(){
                                window.location="index.php";
                              }, 1500);


                              </script>

                 <?php
                }elseif ($status = "gagal") {
                  ?>

                          <script>

                          swal({
                            title: "GAGAL !",
                            text: "Proses pendaftaran Gagal",
                            icon: "error",
                            button: "Oke !",
                          });

                          setTimeout(function(){
                            window.location="daftarketua.php";
                          }, 1500);


                          </script>

                  <?php
                }

            
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
              <p class="mb-4">Silahkan Daftar akun Anda sebagai Admin</p>
            </div>
            <form action="Action_front/daftarproses.php" method="post">
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" required name="email" class="form-control"  id="Email">

              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password"  required name = "password" class="form-control" id="password">
                
              </div>
              

              <div class="form-group last mb-4">
                <label for="nama">Nama</label>
                <input type="text"  required name = "nama" class="form-control" id="password">
                
              </div>

              <div class="form-group last mb-4">
                <label for="Nomer HP">Nomer HP</label>
                <input type="text"  required name = "hp" class="form-control" id="password">
                
              </div>


              <div class="form-group last mb-4">
                <label for="alamat">Alamat</label>
                <input type="text"  required name = "alamat" class="form-control" id="password">
                
              </div>
              


              
              


              <div class="form-group last mb-4">
                <label for="jk">Jenis Kelamin</label>

                <select required class="form-control" name="jk" id="">
                  <option value="kosong" readonly></option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>

                  
                </select>
                
                
              </div>
                       

              
              
              <div class="d-flex mb-5 align-items-center">
              
                  
                </label>
 
              </div>

              <input name = "flogin" type="submit" value="Log In" class="btn text-white btn-block btn-primary">

              
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
