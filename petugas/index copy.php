
   <?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
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
                                                
                                                $selectsampahuser= mysqli_query($koneksi,"SELECT * From tb_sampah_user WHERE id_sampah ='$data[id_sampah]'");

                                                $total = 0;
                                                while ( $datasampah = mysqli_fetch_array($selectsampahuser)) {
                                                    $total = $datasampah['jumlah_sampah']+$total ;
                                                }
                                                echo $total;
                                               
                                               
                                                
                                                ?>
                                               
                                            </div>
                                        </div>
                                    </div>


                                <?php
                            }

                        
                        ?>
             
                    </div>
                </main>
                
    </body>
</html>
<?php   

    include 'view/footer.php';

?>