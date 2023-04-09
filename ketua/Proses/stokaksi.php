<?php
include '../../Action_front/koneksi.php';

if (isset($_POST['uang'])) {
    header("Location:../tambahstok.php");
}


if (isset($_POST['fhapus'])) {
    $id = $_POST['id'];

    $qdelete = mysqli_query($koneksi,"DELETE FROM `tb_stok` WHERE `id_stok`  = '$id'");

    if ($qdelete) {
        $hapus = "berhasil";
        header("Location:../datastok.php?status=$hapus");

    }else{

        $hapus = "gagal";
        header("Location:../datastok.php?status=$gagal");
    }
    
}
?>