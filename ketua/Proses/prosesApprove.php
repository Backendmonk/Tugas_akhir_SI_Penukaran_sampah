<?php
include '../../Action_front/koneksi.php';


$id = $_POST['id'];
$user = $_POST['user'];
$poin = $_POST['poin'];
if (isset($_POST['approve'])) {
    
    $query = mysqli_query($koneksi,"UPDATE `tb_penukaran_sampah` SET `status_approval`='Approved' WHERE `id_penukaran` = '$id'");

    if ($query) {
        $selectpoin = mysqli_query($koneksi,"SELECT * FROM tb_poin Where id_user = '$user'");
        $data = mysqli_fetch_array($selectpoin);

        $totalpoin = $data['akumulasi_poin']- $poin ;
        
        $updatepenguranganPoin = mysqli_query($koneksi,"UPDATE `tb_poin` SET `akumulasi_poin`='$totalpoin' WHERE id_user = '$user'");

        $status  = "berhasil";
        header("Location:../aproval.php?status=$status");
    }else{
        $status  = "gagal";
        header("Location:../aproval.php?status=$status");
    }
}

?>