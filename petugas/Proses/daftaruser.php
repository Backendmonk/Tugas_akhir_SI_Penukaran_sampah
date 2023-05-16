<?php

include '../../Action_front/koneksi.php';

        $id = rand(9999,99999);
        
     $akses = "pengguna";   
     $nama =  $_POST['nama'];
    $alamat =  $_POST['alamat'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $nohp =  $_POST['nohp'];
    $jeniskelamin =  $_POST['jeniskelamin'];

    if (isset($_POST['fclose'])) {
        header("Location:../user.php");
    }

    if (isset($_POST['fdaftar'])) {

        if ($nama =="") {
            $statusdaftar = "gagal";

            header("Location:../tambahuser.php?statusdaftar=$statusdaftar");
        }elseif ($alamat=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahuser.php?statusdaftar=$statusdaftar");

        }
        elseif ($email=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahuser.php?statusdaftar=$statusdaftar");

        }
        elseif ($password=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahuser.php?statusdaftar=$statusdaftar");

        }
        elseif ($nohp=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahuser.php?statusdaftar=$statusdaftar");

        }elseif ($jeniskelamin=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahuser.php?statusdaftar=$statusdaftar");

        }else{

            $qdaftar = mysqli_query($koneksi,"INSERT INTO `tb_user`(`id_user`, `nama`, `alamat`, `email`, `jenis_kelamin`, `no_telepon`, `password`, `hak_akses`) VALUES ('$id','$nama','$alamat','$email','$jeniskelamin','$nohp','$password','$akses')");

                    if ($qdaftar) {
                        $statusdaftar = "berhasil";
                        $qinputto_poinNa = mysqli_query($koneksi,"INSERT INTO `tb_poin`(`id_user`, `akumulasi_poin`) VALUES ('$id','0')");

                        header("Location:../tambahuser.php?statusdaftar=$statusdaftar");
                    }else{

                        $statusdaftar = "gagal";

                        header("Location:../tambahuser.php?statusdaftar=$statusdaftar");
                    }

        }
        
        
        
    }


?>