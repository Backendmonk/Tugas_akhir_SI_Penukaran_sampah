
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

                            if ($status=="berhasil") {
                                 ?>
                                  <script>

                                    swal({
                                    title: "Approved",
                                    text: "",
                                    icon: "success"
                                   
                                    });

                                    setTimeout(function(){
                        window.location="aproval.php";
                       }, 2000);

                                    </script>



                            <?php
                            }elseif ($status=="gagal") {
                                ?>
                                  <script>

                                    swal({
                                    title: "Gagal",
                                    text: "",
                                    icon: "error"

                                    });
                                    setTimeout(function(){
                                        window.location="aproval.php";
                                    }, 2000);
                                    </script>



                            <?php
                            }
                        }

                        
                ?>

                <div class="row">

                <h2>Rekap Pengajuan</h2>
                        <div class="card mb-4">
                    <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id Penukaran</th>
                                            <th>Jumlah Redem</th>
                                            <th>Pengajuan Uang</th>
                                            <th>Status</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
                                            $selectdata = mysqli_query($koneksi,"SELECT * FROM tb_penukaran_sampah ");

                                            while ($data = mysqli_fetch_array($selectdata)) {
                                                ?>

                                        <tr>
                                            <td><?php echo $data['id_penukaran'] ?></td>
                                            <td><?php echo $data['jml_redem'] ?></td>
                                            <td><?php echo "Rp"." .".$data['jumlah_uang'] ?></td>
                                                                                        
                                            <td><?php 

                                                if ($data['status_approval']=='Belum') {
                                                    ?>
                                                   <button type="button" class="btn btn-danger">Approve Pengajuan</button>
                                                    
                                                   

                                                    <?php
                                                }elseif ($data['status_approval']=='Approved') {

                                                    echo "Approved";
                                                }
                                              
                                            
                                            ?> </td>
                                           
                                           
                                        </tr>


                                    <?php
                                            }
                                    ?>
                                        
                                    </tbody>
                                    

                                         
                                

                                    </table>
                                        </div>   


                    <div>   


                    
            </main>
                
</div>
    </body>
</html>
<?php   

    include 'view/footer.php';

?>