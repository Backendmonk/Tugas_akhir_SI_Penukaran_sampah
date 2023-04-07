<?php

include '../../Action_front/koneksi.php';

        $id = rand(9999,99999);
      
     $nama =  $_POST['nama'];
    $stok_awal = $_POST['stok_awal'];
    $satuan = $_POST['satuan'];
    $jenis_stok =$_POST['jenis'];
    
    if (isset($_POST['fclose'])) {
        header("Location:../datastok.php");
    }

    if (isset($_POST['fdaftar'])) {

        if ($nama =="") {
            $statusdaftar = "gagal";

            header("Location:../tambahstok.php?statusdaftar=$statusdaftar");
        }elseif ($stok_awal="") {
            $statusdaftar = "gagal";
            header("Location:../tambahstok.php?statusdaftar=$statusdaftar");

        }elseif ($satuan=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahstok.php?statusdaftar=$statusdaftar");

        }
        elseif ($jenis_stok=="") {
            $statusdaftar = "gagal";
            header("Location:../tambahstok.php?statusdaftar=$statusdaftar");

        }
       
       else{
                $ceknama = mysqli_query($koneksi, "SELECT * FROM `tb_stok` WHERE `nama` = '$nama'");
                $row = mysqli_num_rows($ceknama);
                if ($row > 1) {
                    $statusnama= "ada";
                    header("Location:../tambahstok.php?statusnama=$statusnama");
                }else{
                    
                    if ($satuan == "Rp" AND $jenis_stok != "uang") {
                        $stokcek = "gagal";
                        header("Location:../tambahstok.php?stokcek=$stokcek");
                    }elseif ($satuan != "Rp" AND $jenis_stok =="uang") {
                        $stokcek = "gagal";
                        header("Location:../tambahstok.php?stokcek=$stokcek");
                    }else {
                        $qdaftar = mysqli_query($koneksi,"INSERT INTO `tb_stok`(`id_stok`, `nama`, `jumlah_stok`, `satuan`, `jenis_stok`) VALUES ('$id','$nama','$stok_awal','$satuan','$jenis_stok')");
    
                        if ($qdaftar) {
                            $statusdaftar = "berhasil";
    
                            header("Location:../tambahstok.php?statusdaftar=$statusdaftar");
                        }else{
    
                            $statusdaftar = "gagal";
    
                            header("Location:../tambahstok.php?statusdaftar=$statusdaftar");
                        }
                    }
                }
               

            

        }
        
        
        
    }


?>