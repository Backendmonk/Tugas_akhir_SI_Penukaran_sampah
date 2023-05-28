
   <?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
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
                           
                            
                           

                        
            
                   
                    <div>               
                    <center>
                        

                    <video width="500" height="500" controls>
                        <source src="asset/video.mp4" type="video/mp4">
                        </video>

                        <h5>Selamat datang di sistem penukaran sampah masa kini<br> menuju lingkungan yang bersih dan asri</h5>
                    </center>

                        <br>
                        <br>

                        <h2>Rekap Sampah Anda</h2>
                        <div class="card mb-4">
                    <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Sampah</th>
                                            <th>Jumlah Sampah (kg)</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
                                            $selectdata = mysqli_query($koneksi,"SELECT tb_user.nama as nama_user, tb_sampah.nama , tb_rekap_sampah.jumlah_Kg,tb_rekap_sampah.tanggal_masuk FROM tb_rekap_sampah inner join tb_user on tb_rekap_sampah.id_user = tb_user.id_user inner join tb_sampah on tb_rekap_sampah.id_sampah = tb_sampah.id_sampah WHERE tb_rekap_sampah.id_user = '$id'");

                                            while ($data = mysqli_fetch_array($selectdata)) {
                                                ?>

                                        <tr>
                                            <td><?php echo $data['nama_user'] ?></td>
                                            <td><?php echo $data['nama'] ?></td>
                                                                                        
                                            <td><?php echo $data['jumlah_Kg']." "."KG" ?> </td>
                                            <td><?php echo $data['tanggal_masuk'] ?> </td>
                                           
                                        </tr>


                                    <?php
                                            }
                                    ?>
                                        
                                    </tbody>
                                    

                                         
                                

                                    </table>
                                        </div>   


                                        
                        </div>

                        
            
                    <div>   


                    


                    
            </main>
                
</div>
    </body>
</html>
<?php   

    include 'view/footer.php';

?>