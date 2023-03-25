<?php

        include '../Action_front/koneksi.php';


        session_start();

        if (!isset($_SESSION['sesiketua'])) {
            header("Location:../index.php");
        }


        $id = $_SESSION['sesiketua'];
        
        $selectuser = mysqli_query($koneksi,"SELECT * FROM `tb_user` WHERE `id_user` = '$id'");

        $arrayselector = mysqli_fetch_array($selectuser);

        
        

        if (!$koneksi) {
           echo "gagal"; 
        }else{
            echo "berhasil";
        }



?>