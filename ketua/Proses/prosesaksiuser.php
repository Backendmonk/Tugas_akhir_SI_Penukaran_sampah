<?php
include '../../Action_front/koneksi.php';



echo $_POST['id'];

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    header("Location:../edituser.php?id=$id");
}


if (isset($_POST['hapus'])) {

    $qdelete = mysqli_query($koneksi,"DELETE FROM `tb_user` WHERE id_user = '$_POST[id]'");
    
    if ($qdelete) {
        $status = "Done";
        header("Location:../user.php?Status=$status");
    }else{
        $status = "Gagal";
        header("Location:../user.php?Status=$status");
    }
}




?>