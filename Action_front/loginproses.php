<?php

    include 'koneksi.php';
    
       //mulai sesi dan cek apakah sesi sudah mulai atau tidak, jika sesi sudah mulai maka langsung heading ke halaman sesuai sesi
   session_start();

   if (@$_SESSION['sesiuser']!="") {
       header("Location:../user/index.php");
   }elseif (@$_SESSION['sesipetugas']!="") {
       header("Location:../petugas/index.php");
   }elseif (@$_SESSION['sesiketua']!="") {
       header("Location../ketua/index.php");
   }

    
      if (isset($_POST['flogin'])) {

        $email = $_POST['email'];

        $password = $_POST['password'];

        $qlog = mysqli_query($koneksi,"SELECT * FROM `tb_user` WHERE `email`  = '$email' AND `password` = '$password'");  

        $arraylog = mysqli_fetch_array($qlog);

        $rowlog = mysqli_num_rows($qlog);

        

        // buat setiap hak akses memiliki sesi , tiap sesi akan membawa id dari akun yang diinput
        if ($rowlog == 1) {

            
        
                if ($arraylog['hak_akses']=='user') {

                    $_SESSION['sesiuser']= $arraylog['id_user'];
                    $hak = "user";
                    header("Location: ../index.php?hak=$hak");
                 
                    
                }elseif ($arraylog['hak_akses']=='petugas') {
                    $_SESSION['sesipetugas'] = $arraylog['id_user'];
                    $hak = "petugas";

                    header("Location:../index.php?hak=$hak");
                    
                }elseif ($arraylog['hak_akses']=='Ketua') {
                    $_SESSION['sesiketua'] = $arraylog['id_user'];
                    $hak = "ketua";

                    header("Location:../index.php?hak=$hak");
                    exit;
                }

        }elseif ($rowlog == 0) {
            $status = "error";
            header("Location:../index.php?status=$status");
            exit;
        }

        
    
      }

   



?>