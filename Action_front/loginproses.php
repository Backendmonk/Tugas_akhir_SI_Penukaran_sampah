<?php

    include 'koneksi.php';

    
    


    


      if (isset($_POST['flogin'])) {

        $email = $_POST['email'];

        $password = $_POST['password'];

        $qlog = mysqli_query($koneksi,"SELECT * FROM `tb_user` WHERE `email`  = '$email' AND `password` = '$password'");  

        $arraylog = mysqli_fetch_array($qlog);

        $rowlog = mysqli_num_rows($qlog);

        if ($rowlog == 1) {
                if ($arraylog['hak_akses'] ='user') {


                    $hak = "user";
                    header("Location: ../index.php?hak=$hak");
                 exit;
                    
                }elseif ($arraylog['hak_akses']= 'petugas') {
                    
                    $hak = "petugas";

                    header("Location:../index.php?hak=$hak");
                    exit;
                }

        }

        
    
      }

   



?>