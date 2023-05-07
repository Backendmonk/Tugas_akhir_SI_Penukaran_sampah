<?php
include '../../Action_front/koneksi.php';

$iduser = $_POST['id'];
$sampah = $_POST['sampah'];
$jumlah = $_POST['jumlah'];


//count id 
    if (isset($_POST['fdaftar'])) {
        # code...

        $qcount = mysqli_query($koneksi, "SELECT * FROM tb_sampah_user WHERE `id_user` = '$iduser' AND `id_sampah` ='$sampah'");

        $countrow = mysqli_num_rows($qcount);
    
        if ($countrow < 1) {
            $qinsert = mysqli_query($koneksi,"INSERT INTO `tb_sampah_user`(`id_user`, `id_sampah`, `jumlah_sampah`) VALUES ('$iduser','$sampah','$jumlah')");
        }else{
            $qedit = mysqli_query($koneksi,"UPDATE `tb_sampah_user` SET `jumlah_sampah`='$jumlah' WHERE `id_user` = '$iduser' AND `id_sampah` ='$sampah' ");
        }
    
    }
   

?>