<?php

include '../../Action_front/koneksi.php';

$id = $_POST['id'];
$nama =  $_POST['nama'];
$alamat =  $_POST['alamat'];
$email = $_POST['email'];
$password =  $_POST['password'];    
$nohp =  $_POST['nohp'];
$jeniskelamin =  $_POST['jeniskelamin'];

if (isset($_POST['fdaftar'])) {
    
    if ($nama =="") {
        $statusdaftar = "gagal";

        header("Location:../editpetugas.php?statusdaftar=$statusdaftar&id=$id");
    }elseif ($alamat=="") {
        $statusdaftar = "gagal";
        header("Location:../editpetugas.php?statusdaftar=$statusdaftar&id=$id");

    }
    elseif ($email=="") {
        $statusdaftar = "gagal";
        header("Location:../editpetugas.php?statusdaftar=$statusdaftar&id=$id");

    }
    elseif ($password=="") {
        $statusdaftar = "gagal";
        header("Location:../editpetugas.php?statusdaftar=$statusdaftar&id=$id");

    }
    elseif ($nohp=="") {
        $statusdaftar = "gagal";
        header("Location:../editpetugas.php?statusdaftar=$statusdaftar&id=$id");

    }elseif ($jeniskelamin=="") {
        $statusdaftar = "gagal";
        header("Location:../editpetugas.php?statusdaftar=$statusdaftar&id=$id");
    }else{

        $qupdate = mysqli_query($koneksi,"UPDATE `tb_user` SET `nama`='$nama',`alamat`='$alamat',`email`='$email',`jenis_kelamin`='$jeniskelamin',`no_telepon`='$nohp',`password`='$password' WHERE `id_user` = '$id'");

        if ($qupdate) {
            $edit  = "berhasil";
            header("Location:../petugas.php?edit=$edit");
        }else{
            $edit  = "gagal";
            header("Location:../petugas.php?edit=$edit");
        }

    }




  
}

if (isset($_POST['fclose'])) {
    header("Location:../petugas.php");
}



?>