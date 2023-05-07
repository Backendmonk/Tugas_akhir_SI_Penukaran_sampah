
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
                    <h3>Tambah Data Sampah user</h3>

                <div class="row">

                <?php
                       $id = $_POST['id'];
                     //  echo $id;
               ?>

                 
                    <div class="card mb-4">
                    <div class="card-body">
                    <form action = "Proses/tambahsampah.php" method="POST">
                            <div class="form-row">

                            <div class="form-group col-md-6">
                                
                                <input hidden type="text"  class="form-control" id="inputPassword4" placeholder="Password" name = "id" >
                                </div>
                           

                                <!-- id-->
                                <div class="form-group col-md-6">
                                
                                <input hidden type="text" value ="<?php echo $id ?> " name = "id" class="form-control" id="inputEmail4" placeholder="Email" >
                                </div>                      
                            
                            
                                <div class="form-group col-md-6">
                                <label for="inputState">Jenis Kelamin</label>
                                <select id="inputState" name = "sampah" class="form-control">
                                    <option value = " " >--Pilih Sampah--</option>

                                    <?php

                                        $selectsampah = mysqli_query($koneksi,"SELECT * FROM tb_sampah");

                                        while ($data = mysqli_fetch_array($selectsampah)) {
                                            ?>
                                            <option value = "<?php echo $data['id_sampah'] ?>" ><?php echo $data['nama']?></option>


                                            <?php
                                        }
                                    ?>
                                    
                                </select>
                                </div>

                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Jumlah Sampah</label>
                                <input type="number"  class="form-control" id="inputPassword4" placeholder="Jumlah Sampah" required name = "jumlah" >
                                </div>
                            </div>
                                <br>
                                <br>
                            


                            <button type="submit" name="fdaftar" class="btn btn-primary">Simpan</button>
                            <button type="submit" name ="fclose" class="btn btn-danger">Kembali</button>
                            </form>
                    <div>   


                    
            </main>
                
</div>
    </body>
</html>
<?php   

    include 'view/footer.php';

?>