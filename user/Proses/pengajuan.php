<?php

include '../../Action_front/koneksi.php';

$id = $_POST['id'];
$money = $_POST['money'];
$jenis = $_POST['jenis'];
$poin = $_POST['poin'];
$status = "Belum";
$idpenukaran = rand(32,99909);
$tanggal = date('Y-m-d');

if (isset($_POST['fdaftar'])) {


    //cek poin
    $qselect = mysqli_query($koneksi,"SELECT * FROM tb_poin WHERE id_user = '$id'");

    $data = mysqli_fetch_array($qselect);

        if ($poin < 10) {
            $status = "gagal";
            header("Location:../penukaran-sampah.php?status=$status");
        }elseif ($poin > $data['akumulasi_poin']) {
            $status = "gagal";
            header("Location:../penukaran-sampah.php?status=$status");
        }
        else{
            $jumlahUang = $poin * 1000;
           $qinsert = mysqli_query($koneksi,"INSERT INTO `tb_penukaran_sampah`(`id_penukaran`, `id_user`, `jenis_emoney`, `nomer`,`jml_redem`, `jumlah_uang`, `status_approval`,`tanggal`) VALUES ('$idpenukaran','$id','$jenis','$money','$poin','$jumlahUang','$status','$tanggal')"); 
           if ($qinsert) {
            
            $status = "berhasil";
            header("Location:../penukaran-sampah.php?status=$status");
           }else{
            $status = "gagal";
            header("Location:../penukaran-sampah.php?status=$status");
           }
        }
}

?>  