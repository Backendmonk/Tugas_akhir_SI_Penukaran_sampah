
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>

                <?php

if (isset($_GET['status'])) {
            if (isset($_GET['id'])) {
                $status = $_GET['status'];
            
                if ($status =="berhasil") {
                    ?>
                     <script>

                        swal({
                        title: "Berhasil ",
                        text: "Data Sudah Ditambah",
                        icon: "success",
                        button: "Oke !",
                        });

                       
                        </script>


                    <?php
                }elseif ($status == "gagal") {
                        $id = $_GET['id'];
                    ?>
                    <script>

                       swal({
                       title: "GAGAL ",
                       text: "Data Tidak Boleh Kosong",
                       icon: "error",
                       button: "Oke !",
                       });

                       setTimeout(function(){
                        window.location="detailsampah.php?id="+$id;
                    }, 2000);
                       </script>


                   <?php
                }
            }
            }
            
           
?>
                

              
                <h3>Data Sampah</h3>
                <br>
                <br>
                    <?php

                  
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                    }else{

                        $id = $_POST['id'];


                    }


                    
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
                                                      
                                                    //echo $data['id_sampah'];

                                                    $qselectjumlah = mysqli_query($koneksi,"SELECT * FROM tb_sampah_user WHERE `id_sampah` = '$data[id_sampah]' AND id_user = '$id'");
                                                    $jml = mysqli_fetch_array($qselectjumlah);
                                                    $rowjml = mysqli_num_rows($qselectjumlah);

                                                    if ($rowjml > 0) {
                                                        
                                                        $jumlah = $jml['jumlah_sampah'];
                                                    }else{
                                                        $jumlah = '0';
                                                    }
                                                    echo "Jumlah Sampah : ".$jumlah;
                                                
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