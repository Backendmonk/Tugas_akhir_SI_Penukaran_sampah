<?php

include '../../Action_front/koneksi.php';

        $id = rand(9999,99999);
      
     $nama =  $_POST['nama'];
    $poin =  $_POST['poin'];
    
    if (isset($_POST['fclose'])) {
        header("Location:../sampah.php");
    }

    if (isset($_POST['fdaftar'])) {

        if ($nama =="") {
            $statusdaftar = "gagal";

            header("Location:../tambahsampah.php?statusdaftar=$statusdaftar");
        }elseif ($poin=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahsampah.php?statusdaftar=$statusdaftar");

        }
       else{

            $qdaftar = mysqli_query($koneksi,"INSERT INTO `tb_sampah`(`id_sampah`, `nama`, `jumlah_poin_per_kg`) VALUES ('$id','$nama','$poin')");

                    if ($qdaftar) {
                        $statusdaftar = "berhasil";

                        header("Location:../tambahsampah.php?statusdaftar=$statusdaftar");
                    }else{

                        $statusdaftar = "gagal";

                        header("Location:../tambahsampah.php?statusdaftar=$statusdaftar");
                    }

        }
        
        
        
    }


?>