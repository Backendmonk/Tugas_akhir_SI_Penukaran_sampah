
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
                    <h3>Edit Data stok</h3>

                <div class="row">

                <?php
                        $id = $_GET['idstok'];
                        $qselectdata = mysqli_query($koneksi,"SELECT * FROM `tb_stok` WHERE `id_stok` ='$id'");

                        $data = mysqli_fetch_array($qselectdata);



                                               
               ?>

                 
                    <div class="card mb-4">
                    <div class="card-body">
                    <form action = "Proses/editstok.php" method="POST">
                                                      
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Nama</label>
                                <input type="text"   name = "nama" placeholder="Nama" class="form-control" id="inputCity" value = <?php echo $data['nama'];  ?>>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                
                                <input type="text"  hidden  name = "id" placeholder="Nama" class="form-control" id="inputCity" value = <?php echo $data['id_stok'];  ?>>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Jumlah Stok Awal</label>
                                <input type="text"  name = "stok_awal" placeholder="Poin" class="form-control" id="inputCity" value = <?php echo $data['jumlah_stok'];  ?>>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Satuan</label>
                                <input type="text"  name = "satuan" placeholder="Poin" class="form-control" id="inputCity" readonly value = <?php echo $data['satuan'];  ?>>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Jenis stok</label>
                                <input type="text"  name = "jenis" placeholder="Poin" class="form-control" id="inputCity" readonly  value = <?php echo $data['jenis_stok'];  ?>>
                                </div>

                               
                                </select>
                                </div>

                                

                                
                                </div>
                                <br>
                                <br>
                            


                            <button type="submit" name="fedit" class="btn btn-primary">Daftar</button>
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