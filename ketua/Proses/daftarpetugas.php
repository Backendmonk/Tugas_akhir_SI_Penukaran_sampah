<?php

include '../../Action_front/koneksi.php';

        $idpetugas = rand(9999,99999);
        $id = hash('md5',$idpetugas);
     $akses = "petugas";   
     $nama =  $_POST['nama'];
    $alamat =  $_POST['alamat'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $nohp =  $_POST['nohp'];
    $jeniskelamin =  $_POST['jeniskelamin'];

    if (isset($_POST['fclose'])) {
        header("Location:../petugas.php");
    }

    if (isset($_POST['fdaftar'])) {

        if ($nama =="") {
            $statusdaftar = "gagal";

            header("Location:../tambahpetugas.php?statusdaftar=$statusdaftar");
        }elseif ($alamat=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahpetugas.php?statusdaftar=$statusdaftar");

        }
        elseif ($email=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahpetugas.php?statusdaftar=$statusdaftar");

        }
        elseif ($password=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahpetugas.php?statusdaftar=$statusdaftar");

        }
        elseif ($nohp=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahpetugas.php?statusdaftar=$statusdaftar");

        }elseif ($jeniskelamin=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahpetugas.php?statusdaftar=$statusdaftar");

        }else{

            $qdaftar = mysqli_query($koneksi,"INSERT INTO `tb_user`(`id_user`, `nama`, `alamat`, `email`, `jenis_kelamin`, `no_telepon`, `password`, `hak_akses`) VALUES ('$id','$nama','$alamat','$email','$jeniskelamin','$nohp','$password','$akses')");

                    if ($qdaftar) {
                        $statusdaftar = "berhasil";

                        header("Location:../tambahpetugas.php?statusdaftar=$statusdaftar");
                    }else{

                        $statusdaftar = "gagal";

                        header("Location:../tambahpetugas.php?statusdaftar=$statusdaftar");
                    }

        }
        
        
        
    }


?>