
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>

              
                <h3>Data Sampah</h3>
                <br>
                <br>
                    <?php

                    $id = $_POST['id'];
                    
                    ?>

                    <form action="tambahdatasampah.php" method="post">

                    <input type="text" name = "id" hidden value ="<?php echo $id ?>">
                    <button type="submit" class="btn btn-outline-primary">Tambah Data Sampah</button>

                    </form>
                
               
                        
                <br>
                <br>

                <div class="row">
                           <?php

                                $qselectdata = mysqli_query($koneksi,"SELECT * FROM tb_sampah");

                                while ($data = mysqli_fetch_array($qselectdata)) {
                                    ?>
                                    <div class="col-xl-3 col-md-6">
                                            <div class="card bg-success text-white mb-4">
                                                <div class="card-body"><?php  echo $data['nama'];   ?></div>
                                                <div class="card-footer d-flex align-items-center justify-content-between">
                                                
                                                    <?php  
                                                    
                                                    echo "Jumlah Sampah : ";
                                                
                                                    ?>
                                                   
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