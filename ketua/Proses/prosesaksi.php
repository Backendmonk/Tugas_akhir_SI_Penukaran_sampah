<?php
include '../../Action_front/koneksi.php';



echo $_POST['id'];

if (isset($_POST['edit'])) {
    echo "edit";
}


if (isset($_POST['hapus'])) {

    $qdelete = mysqli_query($koneksi,"DELETE FROM `tb_user` WHERE id_user = '$_POST[id]'");
    
    if ($qdelete) {
        $status = "Done";
        header("Location:../petugas.php?Status=$status");
    }else{
        $status = "Gagal";
        header("Location:../petugas.php?Status=$status");
    }
}




?>