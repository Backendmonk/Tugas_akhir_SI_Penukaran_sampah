<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Halaman Utama
                            </a>
                          
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Master Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">


                                <a class="nav-link" href="petugas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                                Data Petugas
                            </a>

                            
                            <a class="nav-link" href="user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Data User
                            </a>

                            <a class="nav-link" href="datasampah.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-computer"></i></div>
                                Data Sampah
                            </a>
                                    
                                </nav>
                            </div>
                            
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Pengajuan Penukaran Sampah
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-dollar"></i></div>
                                Laporan Keuangan
                            </a>

                            <a class="nav-link" href="totalsampah.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-trash"></i></div>
                                Laporan Sampah
                            </a>


                            <a class="nav-link" href="datastok.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Datastok
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php   

                        echo $arrayselector['nama'];
            ?>
                    </div>
                </nav>
            </div>