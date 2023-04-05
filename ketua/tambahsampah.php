
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
                    <h3>Tambah Data sampah</h3>

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
                        window.location="tambahsampah.php";
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
                        window.location="tambahsampah.php";
                       }, 2000);
                                   </script>


                               <?php
                            }
                        }
               ?>

                 
                    <div class="card mb-4">
                    <div class="card-body">
                    <form action = "Proses/tambahdatasampah.php" method="POST">
                                                      
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Nama</label>
                                <input type="text"   name = "nama" placeholder="Nama" class="form-control" id="inputCity">
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Jumlah Poin Per KG</label>
                                <input type="text"  name = "poin" placeholder="Poin" class="form-control" id="inputCity">
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