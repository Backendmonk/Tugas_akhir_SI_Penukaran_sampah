
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
                                <select name = "satuan" class="form-control" id="exampleFormControlSelect1">
                                <option value = <?php echo $data['satuan'];  ?>>--Pilih Satuan--</option>
                                <option value = "Rp">Rp</option>
                                <option value = "KG">KG</option>
                                <option value = "L">L</option>
                                <option value = "Pcs">Pcs</option>
                                </select>
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Jenis Stok</label>
                                <select name = "jenis" class="form-control" id="exampleFormControlSelect1">
                                <option value = <?php echo $data['jenis_stok'];  ?>>--Jenis Stok--</option>
                                <option value = "uang">Uang</option>
                                <option value = "Barang">Barang</option>
                               
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