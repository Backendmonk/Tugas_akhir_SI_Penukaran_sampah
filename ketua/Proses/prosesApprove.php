<?php
include '../../Action_front/koneksi.php';


$id = $_POST['id'];
$user = $_POST['user'];
$poin = $_POST['poin'];
$uang = $_POST['uang'];
$cashid = rand(44,9883);
$date = date('Y-m-d');
if (isset($_POST['approve'])) {
    
    $query = mysqli_query($koneksi,"UPDATE `tb_penukaran_sampah` SET `status_approval`='Approved' WHERE `id_penukaran` = '$id'");

    if ($query) {
        $selectpoin = mysqli_query($koneksi,"SELECT * FROM tb_poin Where id_user = '$user'");
        $data = mysqli_fetch_array($selectpoin);

        $totalpoin = $data['akumulasi_poin']- $poin ;
        //

        $selectuang = mysqli_query($koneksi,"SELECT * FROM tb_stok");
        $jmluang = mysqli_fetch_array($selectuang);
        
        $updatepenguranganPoin = mysqli_query($koneksi,"UPDATE `tb_poin` SET `akumulasi_poin`='$totalpoin' WHERE id_user = '$user'");
        $totaluang = $jmluang['jumlah_stok'] - $uang;
        $updatejmluang = mysqli_query($koneksi,"UPDATE `tb_stok` SET `jumlah_stok`='$totaluang'");

        $cashflowadd = mysqli_query($koneksi,"INSERT INTO `cash_flow`(`id_flow`, `Jumlah_uang_keluar`, `id_penukaran`, `tanggal`) VALUES ('$cashid','$uang','$id','$date')");

        $status  = "berhasil";
        header("Location:../aproval.php?status=$status");
    }else{
        $status  = "gagal";
        header("Location:../aproval.php?status=$status");
    }
}

?>