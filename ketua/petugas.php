
<?php
            include 'view/header.php';
            include 'view/sidebar.php';
            include '../Action_front/koneksi.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
                <!--   Alert -->
                <?php
                        if (isset($_GET['Status'])) {
                            $status = $_GET['Status'];

                            if ($status=="Done") {
                                 ?>
                                  <script>

                                    swal({
                                    title: "Berhasil Hapus Akun!",
                                    text: "Akun Sudah Terhapus!",
                                    icon: "success"
                                   
                                    });

                                    setTimeout(function(){
                        window.location="petugas.php";
                       }, 2000);

                                    </script>



                            <?php
                            }elseif ($status=="Gagal") {
                                ?>
                                  <script>

                                    swal({
                                    title: "Gagal Hapus Akun!",
                                    text: "Akun Gagal Terhapus!",
                                    icon: "error"

                                    });
                                    setTimeout(function(){
                                        window.location="petugas.php";
                                    }, 2000);
                                    </script>



                            <?php
                            }
                        }
                ?>
               

                        <br>
                        <br>
                        <h2> Data Petugas</h2>
                        <br>
                        <form action="tambahpetugas.php" method="post">
                        <button type="submit" class="btn btn-outline-info">Tambah Petugas</button>
                        </form>
                        
                        <br>
                        <br>
                    <div class="card mb-4">
                    <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No Telepon</th>
                                            <th>Hak Akses</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
                                            $selectdata = mysqli_query($koneksi,"SELECT * FROM `tb_user` WHERE hak_akses = 'petugas'");

                                            while ($data = mysqli_fetch_array($selectdata)) {
                                                ?>

                                        <tr>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['alamat'] ?></td>
                                            <td><?php echo $data['email'] ?></td>
                                            <td><?php echo $data['jenis_kelamin'] ?></td>
                                            <td><?php echo $data['no_telepon'] ?></td>
                                            <td><?php echo $data['hak_akses'] ?></td>

                                            
                                            <td>
                                            <form action="proses/prosesaksi.php" Method ="POST">

                                            <input type="text" hidden value ="<?php echo $data['id_user']  ?>" name ="id">    

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