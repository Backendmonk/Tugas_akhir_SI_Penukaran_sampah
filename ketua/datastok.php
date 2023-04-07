
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>

                <h3>Data Stok</h3>
                <br>
                <br>
                <form action="Proses/stokaksi.php" method="post">
                        <button type="submit" name ="uang" class="btn btn-outline-info">Tambah Stok </button>
                        
                        </form>
               
                        
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
                                                    <form action="" method="post">
                                                    <button type="submit" name ="fubah" class="btn btn-warning">Edit</button>
                                                    <button type="submit" name ="fhapus" class="btn btn-danger">Hapus</button>

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