
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
                    <h3>Tambah Data sampah</h3>

                <div class="row">

                <?php
                       $id = $_GET['id'];
                       $qselect = mysqli_query($koneksi,"SELECT * FROM `tb_sampah` WHERE id_sampah = '$id'");
                       $data = mysqli_fetch_array($qselect);
               ?>

                 
                    <div class="card mb-4">
                    <div class="card-body">
                    <form action = "Proses/editsampah.php" method="POST">
                            <div class="form-row">

                            <div class="form-group col-md-6">
                                
                                <input hidden type="text"  class="form-control" id="inputPassword4" placeholder="Password" name = "id" value = "<?php echo $data['id_sampah'];  ?>">
                                </div>
                           
                            </div>
                           
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Nama</label>
                                <input type="text"   name = "nama" placeholder="Nama" class="form-control" id="inputCity" value = "<?php echo $data['nama'];  ?>">
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Poin</label>
                                <input type="text"  name = "poin" placeholder="Poin" class="form-control" id="inputCity" value = "<?php echo $data['jumlah_poin_per_kg'];  ?>">
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