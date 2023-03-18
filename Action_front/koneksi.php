<?php


$koneksi = mysqli_connect("localhost","root");


if (!$koneksi) {
    echo "gagal";
}else{
    echo "berhasil";
}

?>