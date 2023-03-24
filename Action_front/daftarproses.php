<?php

    include 'koneksi.php';

    
    $randomid = rand(1000,9999);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jk'];
    $jabatan = "Ketua";

    $nomer  = $_POST['hp'];


   // cek email sebelum insert kedalam database.

    $queryselect = mysqli_query($koneksi,"SELECT `email` FROM tb_user WHERE `email` ='$email'");

    $cekrow = mysqli_num_rows($queryselect);

    
    //header kembali ke halaman daftar dan beri alert jika email sudah terdaftar jika tidak maka eksekusi query untuk daftar
    if ($cekrow == 1) {

        $alert = 'ada';
        header("Location:../daftarketua.php?alert=$alert");
    }else{

        $qdaftarketua = mysqli_query($koneksi, "INSERT INTO `tb_user`(`id_user`, `nama`, `alamat`, `email`, `jenis_kelamin`, `no_telepon`, `password`, `hak_akses`) VALUES ('$randomid','$nama','$alamat','$email','$jeniskelamin','$nomer','$password','$jabatan')");

        //cek apakah query tereksekusi atau tidak, jika tidak maka beli alert ke halaman daftar ketua 

        if ($qdaftarketua) {
               $status = 'sukses';
               
               header("Location:../daftarketua.php?status=$status");
        }else{
            $status = 'gagal';

            header("Location../daftarketua.php?status=$status");
        }

    }


?>