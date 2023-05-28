
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
                    <h3>Tambah Data Petugas</h3>

                <div class="row">

                <?php
                       $id = $_GET['id'];
                       
                       $qselect = mysqli_query($koneksi,"SELECT * FROM `tb_user` WHERE id_user = '$id'");
                       $data = mysqli_fetch_array($qselect);
               ?>

                 
                    <div class="card mb-4">
                    <div class="card-body">
                    <form action = "Proses/editpetugas.php" method="POST">
                            <div class="form-row">

                            <div class="form-group col-md-6">
                                
                                <input hidden type="text"  class="form-control" id="inputPassword4" placeholder="Password" name = "id" value = "<?php echo $data['id_user'];  ?>">
                                </div>
                           


                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email"  name = "email" class="form-control" id="inputEmail4" placeholder="Email" value = "<?php echo $data['email'];  ?>">
                                </div>


                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password"  class="form-control" id="inputPassword4" placeholder="Password" name = "password" value = "<?php echo $data['password'];  ?>">
                                </div>
                            </div>
                           
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Nama</label>
                                <input type="text"   name = "nama" placeholder="Nama" class="form-control" id="inputCity" value = "<?php echo $data['nama'];  ?>">
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Alamat</label>
                                <input type="text"  name = "alamat" placeholder="Alamat" class="form-control" id="inputCity" value = "<?php echo $data['alamat'];  ?>">
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">No Telepon</label>
                                <input type="text"  name = "nohp" placeholder="No Telepon" class="form-control" id="inputCity" value = "<?php echo $data['no_telepon'];  ?>">
                                </div>

                                <div class="form-group col-md-6">
                                <label for="inputState">Jenis Kelamin</label>
                                <select id="inputState" name = "jeniskelamin" class="form-control">
                                    <option value = "<?php echo $data['jenis_kelamin'];  ?>" >--Pilih--</option>
                                    <option value = "laki-laki" >Laki-Laki</option>
                                    <option valie = "perempuan">Perempuan</option>
                                </select>
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