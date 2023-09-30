
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
                            if (isset($_GET['status'])) {
                                $status = $_GET['status'];

                                if ($status=="berhasil") {
                                    ?>
                                    <script>

                                        swal({
                                        title: "Berhasil!",
                                        text: "Data Ditambah!",
                                        icon: "success"
                                    
                                        });

                                        setTimeout(function(){
                            window.location="datasampah.php";
                        }, 2000);

                                        </script>



                                <?php
                                }elseif ($status=="gagal") {
                                    ?>
                                    <script>

                                        swal({
                                        title: "Gagal",
                                        text: "Data Gagal Ditambah!",
                                        icon: "error"

                                        });
                                        setTimeout(function(){
                                            window.location="datasampah.php";
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
                                            <th>Poin</th>
                                            
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
                                            $selectdata = mysqli_query($koneksi,"SELECT * FROM `tb_user`inner join tb_poin ON tb_poin.id_user = tb_user.id_user  WHERE hak_akses = 'pengguna    '");

                                            while ($data = mysqli_fetch_array($selectdata)) {
                                                ?>

                                        <tr>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['akumulasi_poin'] ?></td>
                                                                                        
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