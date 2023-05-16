
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>

                <?php


                            if (isset($_GET['status'])) {
                                                        
                                $status = $_GET['status'];

                                if ($status =="berhasil") {
                                    ?>
                                    <script>

                                        swal({
                                        title: "Berhasil ",
                                        text: "Data Sudah Dihapus",
                                        icon: "success",
                                        button: "Oke !",
                                        });

                                        setTimeout(function(){
                            window.location="datastok.php";
                            }, 2000);
                                        </script>


                                    <?php
                                }elseif ($status=="gagal") {
                                    ?>
                                    <script>

                                        swal({
                                        title: "Gagal ",
                                        text: "Data Gagal Dihapus",
                                        icon: "error",
                                        button: "Oke !",
                                        });

                                        setTimeout(function(){
                            window.location="datastok.php";
                            }, 2000);
                                        </script>


                                    <?php
                                }
                            }


                            if (isset($_GET['status_edit'])) {
                            
                            $status_edit = $_GET['status_edit'];
                            if ($status_edit == 'berhasil') {
                                ?>
                                <script>

                                  swal({
                                  title: "Berhasil Edit Stok!",
                                  text: "Stok Berhasil Teredit!",
                                  icon: "success"

                                  });
                                  setTimeout(function(){
                                      window.location="datastok.php";
                                  }, 2000);
                                  </script>



                          <?php
                            }elseif ($status_edit == 'gagal') {
                                ?>
                                <script>

                                  swal({
                                  title: "Gagal Edit Stok!",
                                  text: "Stok Gagal Teredit!",
                                  icon: "error"

                                  });
                                  setTimeout(function(){
                                      window.location="datasok.php";
                                  }, 2000);
                                  </script>



                          <?php
                            }elseif ($status_edit == 'namaada') {
                                ?>
                                <script>

                                  swal({
                                  title: "Nama Sudah Ada!",
                                  text: "Stok Gagal Teredit!",
                                  icon: "warning"

                                  });
                                  setTimeout(function(){
                                      window.location="datastok.php";
                                  }, 2000);
                                  </script>



                          <?php
                            }
                        }
 
                            ?>
                <h3>Data Stok</h3>
                <br>
                <br>
                <!-- <form action="Proses/stokaksi.php" method="post">
                        <button type="submit" name ="uang" class="btn btn-outline-info">Tambah Stok </button>
                        
                        </form>
                -->
                        
                <br>
                <br>

                <div class="row">
                           <?php

                                $qselectdata = mysqli_query($koneksi,"SELECT * FROM tb_stok");

                                while ($data = mysqli_fetch_array($qselectdata)) {
                                    ?>
                                    <div class="col-xl-3 col-md-6">
                                            <div class="card bg-success text-white mb-4">
                                                <div class="card-body"><?php  echo $data['nama'];   ?></div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                
                                                    <?php  
                                                    
                                                    if ($data['jenis_stok']=="uang") {
                                                        echo $data['satuan'].".".$data['jumlah_stok'];
                                                    
                                                    }else{
                                                        echo $data['jumlah_stok'].$data['satuan'];
                                                    }
                                                    
                                                    
                                                    ?>
                                                    <form action="Proses/stokaksi.php" method="post">

                                                    <input type="text" name = "id" hidden value = "<?php echo $data['id_stok']?>">
                                                    <button type="submit" name ="fubah" class="btn btn-warning">Edit</button>
                                                    

                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                    <?php
                                }

                            
                            ?>
                           
                            
                           

                        </div>
            
                   
                    <div>   


                    
            </main>
                
</div>
    </body>
</html>
<?php   

    include 'view/footer.php';

?>