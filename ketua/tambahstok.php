
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
                    <h3>Tambah Data stok</h3>

                <div class="row">

                <?php
                        if (isset($_GET['statusdaftar'])) {
                            
                            $status = $_GET['statusdaftar'];

                            if ($status =="berhasil") {
                                ?>
                                 <script>

                                    swal({
                                    title: "Berhasil ",
                                    text: "Data Sudah Ditambah",
                                    icon: "success",
                                    button: "Oke !",
                                    });

                                    setTimeout(function(){
                        window.location="tambahstok.php";
                       }, 2000);
                                    </script>


                                <?php
                            }elseif ($status == "gagal") {
                                ?>
                                <script>

                                   swal({
                                   title: "GAGAL ",
                                   text: "Data Gagal Ditambah",
                                   icon: "error",
                                   button: "Oke !",
                                   });

                                   setTimeout(function(){
                        window.location="tambahstok.php";
                       }, 2000);
                                   </script>


                               <?php
                            }
                        }


                        if (isset($_GET['stokcek'])) {
                            $cek  = $_GET['stokcek'];
                            if ($cek == "gagal") {
                                ?>
                                <script>

                                   swal({
                                   title: "GAGAL ",
                                   text: "SATUAN DAN JENIS TIDAK MATCH",
                                   icon: "error",
                                   button: "Oke !",
                                   });

                                   setTimeout(function(){
                             window.location="tambahstok.php";
                       }, 2000);
                                   </script>


                               <?php
                            }
                        }

                        if (isset($_GET['statusnama'])) {
                            $cek  = $_GET['statusnama'];
                            if ($cek == "ada") {
                                ?>
                                <script>

                                   swal({
                                   title: "GAGAL ",
                                    text: "NAMA SUDAH DIGUNAKAN",
                                   icon: "warning",
                                   button: "Oke !",
                                   });

                                   setTimeout(function(){
                             window.location="tambahstok.php";
                       }, 2000);
                                   </script>


                               <?php
                            }
                        }
                        
               ?>

                 
                    <div class="card mb-4">
                    <div class="card-body">
                    <form action = "Proses/tambahdatastok.php" method="POST">
                                                      
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Nama</label>
                                <input type="text"   name = "nama" placeholder="Nama" class="form-control" id="inputCity">
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Jumlah Stok Awal</label>
                                <input type="text"  name = "stok_awal" placeholder="Poin" class="form-control" id="inputCity">
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Satuan</label>
                                <select name = "satuan" class="form-control" id="exampleFormControlSelect1">
                                <option>--Pilih Satuan--</option>
                                <option value = "Rp">Rp</option>
                                <option value = "KG">KG</option>
                                <option value = "L">L</option>
                                <option value = "Pcs">Pcs</option>
                                </select>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Jenis Stok</label>
                                <select name = "jenis" class="form-control" id="exampleFormControlSelect1">
                                <option>--Jenis Stok--</option>
                                <option value = "uang">Uang</option>
                                <option value = "Barang">Barang</option>
                               
                                </select>
                                </div>

                                

                                
                                </div>
                                <br>
                                <br>
                            


                            <button type="submit" name="fdaftar" class="btn btn-primary">Daftar</button>
                            <button type="submit" name ="fclose" class="btn btn-danger">Kembali</button>
                            </form>
                    <div>   


                    
            </main>
                
</div>
    </body>
</html>
<?php   

    include 'view/footer.php';

?>