<?php

    
include '../../Action_front/koneksi.php';


$id = $_POST['id'];
$nama =  $_POST['nama'];
$stok_awal = $_POST['stok_awal'];
$satuan = $_POST['satuan'];
$jenis_stok =$_POST['jenis'];


if (isset($_POST['fclose'])) {
    header("Location:../datastok.php");
}

if (isset($_POST['fedit'])) {
    
    $ceknama = mysqli_query($koneksi, "SELECT * FROM `tb_stok` WHERE `nama` = '$nama'");

    $arraydata = mysqli_fetch_array($ceknama);

    $row = mysqli_num_rows($ceknama);

    $id_form = $id;
    

    if ($id_form == $arraydata['id_stok'] ) {

        $update = mysqli_query($koneksi,"UPDATE `tb_stok` SET `nama`='$nama',`jumlah_stok`='$stok_awal',`satuan`='$satuan',`jenis_stok`='$jenis_stok' WHERE `id_stok` = '$id_form'");
        

        if ($update) {
            $status = 'berhasil';
            header("Location:../datastok.php?status_edit=$status");
            
        }
        else {
            $status = 'gagal';
            header("Location:../datastok.php?status_edit=$status");

        }
    }
    else {
        if ($row >= 1) {
            $status = 'namaada';
            header("Location:../datastok.php?status_edit=$status");
        }
    }
}









?>