
<?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>
                   <center><h2>Informasi untuk Anda</h2></center> 
                   <br>
                   <br>

                <div class="row">
                           
                       
                              
                    <?php

$qselectdata = mysqli_query($koneksi,"SELECT * FROM tb_sampah");

while ($data = mysqli_fetch_array($qselectdata)) {
    ?>
    <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body"><?php  echo $data['nama'];   ?></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                
                    <?php  
                            echo " Poin Per KG :"." ".$data['jumlah_poin_per_kg'];        
                    
                    ?>
                   
                </div>
            </div>
        </div>


    <?php
}


?>

<div class="card">
  <div class="card-body">
    <center><h3>Informasi Mengenai Penukaran Poin</h3></center>
    <br>
    <div class="card">
  <h5 class="card-header">Penukaran yang bisa dilakukan</h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Penukaran hanya bisa dilakukan jika Anda memiliki poin diatas 10 dan juga jika stok pada Admin masih ada</p>
    
  </div>

</div>
<br>
<br>
  <div class="card">
  <h5 class="card-header">Mengenai Penukaran</h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">Penukaran akan memoton poin anda sebanyak yang anda lakukan jika di approve oleh admin. Setiap 10 Kg sampah akan di hargai sebanyak Rp 10.000 (10000 untuk 1kg sampah).</p>

  </div>
</div>

  </div>
</div>


</div>
                    
            </main>
                
</div>
    </body>
</html>
<?php   

    include 'view/footer.php';

?>