
<?php
            include 'view/header.php';
            include 'view/sidebar.php';
            include '../Action_front/koneksi.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
                <!--   Alert Hapus Data -->
             
               

                        <br>
                        <br>
                        <h2> Data Petugas</h2>
                        <br>
                        
                        
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
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
                                            $selectdata = mysqli_query($koneksi,"SELECT * FROM `tb_user` WHERE hak_akses = 'petugas    '");

                                            while ($data = mysqli_fetch_array($selectdata)) {
                                                ?>

                                        <tr>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['alamat'] ?></td>
                                            <td><?php echo $data['email'] ?></td>
                                            <td><?php echo $data['jenis_kelamin'] ?></td>
                                            <td><?php echo $data['no_telepon'] ?></td>
                                            <td><?php echo $data['hak_akses'] ?></td>

                                           
                                           
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