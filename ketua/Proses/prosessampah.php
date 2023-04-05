<?php
include '../../Action_front/koneksi.php';



echo $_POST['id'];

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    header("Location:../editsampah.php?id=$id");
}


if (isset($_POST['hapus'])) {

    $qdelete = mysqli_query($koneksi,"DELETE FROM `tb_sampah` WHERE id_sampah = '$_POST[id]'");
    
    if ($qdelete) {
        $status = "Done";
        header("Location:../sampah.php?Status=$status");
    }else{
        $status = "Gagal";
        header("Location:../sampah.php?Status=$status");
    }
}




?>