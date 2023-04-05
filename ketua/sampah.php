
<?php
            include 'view/header.php';
            include 'view/sidebar.php';
            include '../Action_front/koneksi.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
                <!--   Alert Hapus Data -->
                <?php
                        if (isset($_GET['Status'])) {
                            $status = $_GET['Status'];

                            if ($status=="Done") {
                                 ?>
                                  <script>

                                    swal({
                                    title: "Berhasil Hapus Sampah!",
                                    text: "Sampah Sudah Terhapus!",
                                    icon: "success"
                                   
                                    });

                                    setTimeout(function(){
                        window.location="sampah.php";
                       }, 2000);

                                    </script>



                            <?php
                            }elseif ($status=="Gagal") {
                                ?>
                                  <script>

                                    swal({
                                    title: "Gagal Hapus Sampah!",
                                    text: "Sampah Gagal Terhapus!",
                                    icon: "error"

                                    });
                                    setTimeout(function(){
                                        window.location="sampah.php";
                                    }, 2000);
                                    </script>



                            <?php
                            }
                        }

                        //alert edit data


                        if (isset($_GET['edit'])) {
                            $edit = $_GET['edit'];

                            if ($edit=="berhasil") {
                                 ?>
                                  <script>

                                    swal({
                                    title: "Berhasil Edit Sampah!",
                                    text: "Sampah Sudah Teredit!",
                                    icon: "success"
                                   
                                    });

                                    setTimeout(function(){
                        window.location="sampah.php";
                       }, 2000);

                                    </script>



                            <?php
                            }elseif ($edit=="gagal") {
                                ?>
                                  <script>

                                    swal({
                                    title: "Gagal Edit Sampah!",
                                    text: "Sampah Gagal Teredit!",
                                    icon: "error"

                                    });
                                    setTimeout(function(){
                                        window.location="sampah.php";
                                    }, 2000);
                                    </script>



                            <?php
                            }
                        }
                ?>
               

                        <br>
                        <br>
                        <h2> Data sampah</h2>
                        <br>
                        <form action="tambahsampah.php" method="post">
                        <button type="submit" class="btn btn-outline-info">Tambah sampah</button>
                        </form>
                        
                        <br>
                        <br>
                    <div class="card mb-4">
                    <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama Sampah</th>
                                            <th>Jumlah Poin Per KG</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
                                            $selectdata = mysqli_query($koneksi,"SELECT * FROM `tb_sampah` ");

                                            while ($data = mysqli_fetch_array($selectdata)) {
                                                ?>

                                        <tr>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['jumlah_poin_per_kg'] ?></td>
                                                                                        
                                            <td>
                                            <form action="proses/prosessampah.php" Method ="POST">

                                            <input type="text" hidden value ="<?php echo $data['id_sampah']  ?>" name ="id">    

                                            <button type="submit" name = "edit" class="btn btn-primary">Edit</button> 
                                            
                                            <button type="submit" name ="hapus" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                           
                                        </tr>


                                    <?php
                                            }
                                    ?>
                                        
                                    </tbody>
                                    

                                         
                                

                                    </table>
                    <div>   


                    
            </main>
                
</div>
    </body>
</html>
<?php   

    include 'view/footer.php';

?>