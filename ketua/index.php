
   <?php
            include 'view/header.php';
            include 'view/sidebar.php';

?>
            <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <main>

                <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Sampah Plastik yang Sudah Dikumpulkan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Sampah Kaleng yang Sudah Dikumpulkan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Sampah Botol yang Sudah Dikumpulkan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Sampah Kardus yang Sudah Dikumpulkan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    <center>
                        

                  <?php

                            include 'chart.php';
                  ?>
                    </center>

                        <br>
                        <br>
                        <h2> History Penarikan Poin</h2>
                        <br>
                    <div class="card mb-4">
                    <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>

                                    </table>
                    <div>   


                    
            </main>
                
</div>
    </body>
</html>
<?php   

    include 'view/footer.php';

?>