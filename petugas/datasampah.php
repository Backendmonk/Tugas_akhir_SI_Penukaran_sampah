
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
                                    title: "Berhasil Hapus Akun!",
                                    text: "Akun Sudah Terhapus!",
                                    icon: "success"
                                   
                                    });

                                    setTimeout(function(){
                        window.location="user.php";
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
                                        window.location="user.php";
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
                                    title: "Berhasil Edit Akun!",
                                    text: "Akun Sudah Teredit!",
                                    icon: "success"
                                   
                                    });

                                    setTimeout(function(){
                        window.location="user.php";
                       }, 2000);

                                    </script>



                            <?php
                            }elseif ($edit=="gagal") {
                                ?>
                                  <script>

                                    swal({
                                    title: "Gagal Edit Akun!",
                                    text: "Akun Gagal Teredit!",
                                    icon: "error"

                                    });
                                    setTimeout(function(){
                                        window.location="user.php";
                                    }, 2000);
                                    </script>



                            <?php
                            }
                        }
                ?>
               

                        <br>
                        <br>
                        <h2> Data Sampah user</h2>
                        <br>
                        
                        <br>
                        <br>
                    <div class="card mb-4">
                    <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
                                            $selectdata = mysqli_query($koneksi,"SELECT * FROM `tb_user` WHERE hak_akses = 'pengguna    '");

                                            while ($data = mysqli_fetch_array($selectdata)) {
                                                ?>

                                        <tr>
                                            <td><?php echo $data['nama'] ?></td>
                                                                                        
                                            <td>
                                            <form action="detailsampah.php" Method ="POST">

                                            <input type="text" hidden value ="<?php echo $data['id_user']  ?>" name ="id">    

                                            <button type="submit" name = "edit" class="btn btn-success">Data Sampah</button> 
                                            
                                           
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