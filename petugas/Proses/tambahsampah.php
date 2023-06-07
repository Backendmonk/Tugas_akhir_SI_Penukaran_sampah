<?php
include '../../Action_front/koneksi.php';

$iduser = $_POST['id'];
$sampah = $_POST['sampah'];
$jumlah = $_POST['jumlah'];
$date = date('Y-m-d');

$idget = rand(40,9000);
//count id 
    if (isset($_POST['fdaftar'])) {

        if ($sampah == "") {
            $status  = "gagal";
            header("Location:../detailsampah.php?status=$status&id=$iduser");
        }elseif ($jumlah == "") {
            $status  = "gagal";
            header("Location:../detailsampah.php?status=$status&id=$iduser");
        }else{

            $qcount = mysqli_query($koneksi, "SELECT * FROM tb_sampah_user WHERE `id_user` = '$iduser' AND `id_sampah` ='$sampah'");

            $countrow = mysqli_num_rows($qcount);
            
            //
    
            $qselectdatapoin = mysqli_query($koneksi,"SELECT * FROM tb_poin WHERE `id_user` ='$iduser'");
            $selectpoinsampah = mysqli_query($koneksi,"SELECT * FROM `tb_sampah` WHERE `id_sampah` = '$sampah'");
            $data_poin = mysqli_fetch_array($qselectdatapoin);
            $data_poinsampah = mysqli_fetch_array($selectpoinsampah);
    
            $poin = ($data_poinsampah['jumlah_poin_per_kg'] * $jumlah ) + $data_poin['akumulasi_poin'];
            
            if ($countrow < 1) {
                $qinsert = mysqli_query($koneksi,"INSERT INTO `tb_sampah_user`(`id_user`, `id_sampah`, `jumlah_sampah`) VALUES ('$iduser','$sampah','$jumlah')");
    
    
                $updatepoin =   mysqli_query($koneksi,"UPDATE `tb_poin` SET `id_user`='$iduser',`akumulasi_poin`='$poin' WHERE id_user = '$iduser'");
    
                $inputsampah  = mysqli_query($koneksi,"INSERT INTO `tb_rekap_sampah`(`id`, `id_sampah`, `id_user`, `jumlah_Kg`,`tanggal_masuk`) VALUES ('$idget','$sampah','$iduser','$jumlah','$date')");
    
                
                $status  = "berhasil";
                header("Location:../datasampah.php?status=$status");
    
                
            }elseif ($countrow >= 1) {
                $datasampah =mysqli_fetch_array($qcount);
    
                $jumlah_sampahtotal = $datasampah['jumlah_sampah'] + $jumlah;
                $qedit = mysqli_query($koneksi,"UPDATE `tb_sampah_user` SET `jumlah_sampah`='$jumlah_sampahtotal' WHERE `id_user` = '$iduser' AND `id_sampah` ='$sampah' ");
    
                $updatepoin =   mysqli_query($koneksi,"UPDATE `tb_poin` SET `id_user`='$iduser',`akumulasi_poin`='$poin' WHERE id_user = '$iduser'");
    
                $inputsampah  = mysqli_query($koneksi,"INSERT INTO `tb_rekap_sampah`(`id`, `id_sampah`, `id_user`,`jumlah_Kg`,`tanggal_masuk`) VALUES ('$idget','$sampah','$iduser','$jumlah','$date')");
    
                $status  = "berhasil";
                header("Location:../datasampah.php?status=$status");
                # code...
            }else{
                
                $status  = "gagal";
                header("Location:../detailsampah.php?status=$status&id=$iduser");
            }
        

        }
        # code...

       
    }

    if (isset($_POST['fclose'])) {
        header("Location:../detailsampah.php?&id=$iduser");
    }
   

?>