
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link" href="aproval.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-check"></i></div>
                                Approval Penukaran Sampah <span class="badge badge-pill badge-primary"><b style ="color:Red;">
                                <?php

                                        $select = mysqli_query($koneksi,"SELECT COUNT(id_penukaran) as jml FROM tb_penukaran_sampah  WHERE `status_approval` = 'belum'");

                                        $array = mysqli_fetch_array($select);

                                        echo $array['jml'];


                                    ?>
                            
                            
                            
                            </b></span> 
                               

                                
                            </a> 
 
                          
                            
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Master Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="user.php">Data User</a>
                                    <a class="nav-link" href="petugas.php
                                    ">Data Petugas</a>
                                    <a class="nav-link" href="rekapapproval.php
                                    ">Rekap Penukaran Sampah</a>
                                    <a class="nav-link" href="sampah.php
                                    ">Database Sampah</a>
                                </nav>
                            </div>


                            <a class="nav-link" href="datastok.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-dollar"></i></div>
                               Data Stok
                            </a>

                        </div>
                    </div>
                
                </nav>
            </div>