<?php

include '../../Action_front/koneksi.php';

$id = $_POST['id'];
$nama =  $_POST['nama'];
$poin =  $_POST['poin'];


if (isset($_POST['fdaftar'])) {

    if ($poin ==" ") {
        $edit  = "gagal";
        header("Location:../sampah.php?edit=$edit");
    }elseif ($nama = " ") {
        $edit  = "gagal";
        header("Location:../sampah.php?edit=$edit");
    }else{

        $qupdate = mysqli_query($koneksi,"UPDATE `tb_sampah` SET `nama`='$nama',`jumlah_poin_per_kg`='$poin' WHERE `id_sampah` = '$id'");

        if ($qupdate) {
            $edit  = "berhasil";
            header("Location:../sampah.php?edit=$edit");
        }else{
            $edit  = "gagal";
            header("Location:../sampah.php?edit=$edit");
        }

    }
   
}

if (isset($_POST['fclose'])) {
    header("Location:../sampah.php");
}



?>