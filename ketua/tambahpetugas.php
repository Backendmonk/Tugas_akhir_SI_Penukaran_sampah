
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
                        if (isset($_GET['statusdaftar'])) {
                            
                            $status = $_GET['statusdaftar'];

                            if ($status =="berhasil") {
                                ?>
                                 <script>

                                    swal({
                                    title: "Berhasil ",
                                    text: "Data Sudah Ditambah",
                                    icon: "success",
                                    button: "Oke !",
                                    });

                                    setTimeout(function(){
                        window.location="tambahpetugas.php";
                       }, 2000);
                                    </script>


                                <?php
                            }elseif ($status == "gagal") {
                                ?>
                                <script>

                                   swal({
                                   title: "GAGAL ",
                                   text: "Data Gagal Ditambah",
                                   icon: "error",
                                   button: "Oke !",
                                   });

                                   setTimeout(function(){
                        window.location="tambah.php";
                       }, 2000);
                                   </script>


                               <?php
                            }
                        }
               ?>

                 
                    <div class="card mb-4">
                    <div class="card-body">
                    <form action = "Proses/daftarpetugas.php" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email"  name = "email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>


                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password"  class="form-control" id="inputPassword4" placeholder="Password" name = "password">
                                </div>
                            </div>
                           
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Nama</label>
                                <input type="text"   name = "nama" placeholder="Nama" class="form-control" id="inputCity">
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">Alamat</label>
                                <input type="text"  name = "alamat" placeholder="Alamat" class="form-control" id="inputCity">
                                </div>

                                <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">No Telepon</label>
                                <input type="text"  name = "nohp" placeholder="No Telepon" class="form-control" id="inputCity">
                                </div>

                                <div class="form-group col-md-6">
                                <label for="inputState">Jenis Kelamin</label>
                                <select id="inputState" name = "jeniskelamin" class="form-control">
                                    <option value = "laki-laki" >Laki-Laki</option>
                                    <option valie = "perempuan">Perempuan</option>
                                </select>
                                </div>
                                <br>
                                <br>
                            


                            <button type="submit" name="fdaftar" class="btn btn-primary">Daftar</button>
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