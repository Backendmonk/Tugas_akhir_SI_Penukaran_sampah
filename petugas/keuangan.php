
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
                        <h2> Cash Flow Keluar</h2>
                        <br>
                        
                        
                <div class="row">
                    <div class="card mb-4">
                    <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID Cash FLow</th>
                                            <th>Jumlah Uang Keluar</th>
                                            <th>Id Penukaran</th>
                                            <th>Tanggal</th>
                                                                                       
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                    <?php
                                            $selectdata = mysqli_query($koneksi,"SELECT * FROM `cash_flow`");

                                            while ($data = mysqli_fetch_array($selectdata)) {
                                                ?>

                                        <tr>
                                            <td><?php echo $data['id_flow'] ?></td>
                                            <td><?php echo "RP"."."." ".$data['Jumlah_uang_keluar']; ?></td>
                                            <td><?php echo $data['id_penukaran'] ?></td>
                                            <td><?php echo $data['tanggal'] ?></td>
                                            

                                           
                                           
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