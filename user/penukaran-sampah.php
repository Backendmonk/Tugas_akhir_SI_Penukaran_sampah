
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
                <br>
            <br>    


<?php


            if (isset($_GET['Status'])) {
                            $status = $_GET['status'];

                            if ($status=="berhasil") {
                                 ?>
                                  <script>

                                    swal({
                                    title: "Berhasil !",
                                    text: "Pengajuan Berhasil Diajukan",
                                    icon: "success"
                                   
                                    });

                                    setTimeout(function(){
                        window.location="penukaran-sampah.php";
                       }, 2000);

                                    </script>



                            <?php
                            }elseif ($status=="gagal") {
                                ?>
                                  <script>

                                    swal({
                                    title: "Gagal !",
                                    text: "Pengajuan Gagal !",
                                    icon: "error"

                                    });
                                    setTimeout(function(){
                                        window.location="penukaran-sampah.php";
                                    }, 2000);
                                    </script>



                            <?php
                            }
                        }


                        ?>
                <div class="row">
                        
    <h3>Penukaran Sampah </h3>
                
                    <?php

                    $iduser = $id;

                    ?>
                 
                    <div class="card mb-4">
                    <div class="card-body">
                    <form action = "Proses/pengajuan.php" method="POST">
                            <div class="form-row">

                           
                           

                                <!-- id-->
                                <div class="form-group col-md-6">
                                
                                <input hidden type="text" value ="<?php echo $iduser ?> " name = "id" class="form-control" id="inputEmail4" placeholder="Email" >
                                </div>                      
                            
                            
                                

                                <div class="form-group col-md-6">
                                <label for="inputPassword4">No E Money</label>
                                <input type="text"  class="form-control" id="inputPassword4" placeholder="Nomer E Money"  name = "money" >
                                </div>

                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Jenis</label>
                                <select name ="jenis" class="form-select" aria-label="Default select example">
                                <option selected>--Select--</option>
                                <option value="Gopay">Gopay</option>
                                <option value="ShopeePay">ShopeePay</option>

                                </select>
                                </div>


                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Jumlah Poin Yang Ditukar</label>
                                <?php
                                        $select = mysqli_query($koneksi,"SELECT akumulasi_poin as poin From tb_poin Where id_user = '$iduser'");
                                        $datapoin = mysqli_fetch_array($select);

                                        if ($datapoin['poin'] < 10) {
                                            ?>
                                            <input type="text"  class="form-control" id="inputPassword4" placeholder="Poin Kurang Dari 10" readonly name = "nomer" >
                                            </div>


                            </div>
                                <br>
                                <br>
                            


                          
                                            
                                            <?php
                                        }else{


                                            ?>
                                            <input type="text"  class="form-control" id="inputPassword4" placeholder="Poin"  name = "poin" >
                                            </div>


                            </div>
                                <br>
                                <br>
                            


                            <button type="submit" name="fdaftar" class="btn btn-primary">Ajukan</button>
                            

                                            <?php
                                            
                                        }
                                ?>
                                
                                                    
                                
                            </form>



                                    </div>
                                    
                                    </div>

                                    <br>

                                    <br>

                                    <?php

                                    include 'chartapp.php';


                                    ?>


                                    <br>

                                    <h2>Rekap Pengajuan</h2>
                        <div class="card mb-4">
                    <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id Penukaran</th>
                                            <th>Jumlah Redem</th>
                                            <th>Status</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
                                            $selectdata = mysqli_query($koneksi,"SELECT * FROM tb_penukaran_sampah WHERE id_user = '$id'");

                                            while ($data = mysqli_fetch_array($selectdata)) {
                                                ?>

                                        <tr>
                                            <td><?php echo $data['id_penukaran'] ?></td>
                                            <td><?php echo $data['jml_redem'] ?></td>
                                                                                        
                                            <td><?php 

                                                if ($data['status_approval']=='Belum') {
                                                    ?>
                                                   <button type="button" class="btn btn-danger">Pending</button>

                                                    <?php
                                                }elseif ($data['status_approval']=='Approved') {
                                                    Echo "Approved";
                                                }
                                              
                                            
                                            ?> </td>
                                           
                                           
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