<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Web Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo1.png">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
        $user_id = $_SESSION['id_admin'];
    }
    ?>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ms-4" href="home.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="img/logo1.png" class="me-2 figure-img img-fluid rounded" width="45" height="45">

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <span class="mr-3 d-none d-lg-inline text-gray-600 small" style="font-weight:bold">SiPENA Dashboard

                            </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="profile-pic me-2" src="../html/img/user/person-icon.png" />
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="pages-profile.php" aria-expanded="false">
                                        <span class="hide-menu">Profile</span></a>
                                    <a class="dropdown-item" href="logout.php" data-bs-toggle="modal" data-bs-target="#logoutModal">Keluar</i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="home.php" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item">
                        </li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-bencana.php" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span class="hide-menu">Rekap Pelaporan</span></a></li> -->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-data-table.php" aria-expanded="false"><i class="mdi me-2 mdi-table-large"></i><span class="hide-menu">Data Tabel</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-data-rekap.php" aria-expanded="false"><i class="mdi me-2 mdi-table-large"></i><span class="hide-menu">Data Rekap</span></a></li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-pelaporan.php" aria-expanded="false"><i class="mdi me-2 mdi-file-document"></i><span class="hide-menu">Pelaporan</span></a></li> -->
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="kritik.php" aria-expanded="false"><i class="mdi me-2 mdi-lead-pencil"></i><span class="hide-menu">Kritik & Saran</span></a></li> -->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Rekap Pelaporan</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="pages-data-rekap.php">Data Rekap</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Rekap Pelaporan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <?php
                if (isset($_GET['pesan'])) {
                    $pesan = $_GET['pesan'];
                    if ($pesan == "input") {
                        echo '<div class="alert alert-primary" role="alert"> Data berhasil di input!</div';
                    } else if ($pesan == "gagal") {
                        echo
                        '<div class="alert alert-danger" role="alert"> Data Gagal di input!</div';
                    } else if ($pesan == "hapus") {
                        echo
                        '<div class="alert alert-success" role="alert"> Data berhasil di hapus!</div';
                    } else if ($pesan == "update") {
                        echo
                        '<div class="alert alert-success" role="alert"> Data berhasil di update!</div';
                    } else if ($pesan == "acc") {
                        echo
                        '<div class="alert alert-success" role="alert"> Data berhasil di Ubah!</div';
                    } else if ($pesan == "acc!") {
                        echo
                        '<div class="alert alert-success" role="alert"> Data gagal di Ubah!</div';
                    }
                }
                ?>
                <?php include 'conn.php'; ?>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Kejadian</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Desa</th>
                                        <th>Kecamatan</th>
                                        <th>Bencana</th>
                                        <th>Tanggal</th>
                                        <th>Detail</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <?php
                                $halaman = 10;
                                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                                $mulai = ($page > 1) ? ($page * $halaman) - $halaman : 0;

                                $previous = $page - 1;
                                $next = $page + 1;

                                $result = mysqli_query($conn, "SELECT * FROM rekap_bencana");
                                $total = mysqli_num_rows($result);
                                $pages = ceil($total / $halaman);
                                $sql = mysqli_query($conn, "SELECT * FROM rekap_bencana
                                    JOIN desa_detail ON rekap_bencana.id_desa_detail = desa_detail.id_desa_detail
                                    JOIN kec_detail ON desa_detail.id_kec_detail = kec_detail.id_kec_detail
                                    JOIN bencana_detail ON rekap_bencana.id_bencana_detail = bencana_detail.id_bencana_detail WHERE status='1' LIMIT $mulai, $halaman ");

                                $no = $mulai + 1;
                                while ($row = mysqli_fetch_array($sql)) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row['desa']; ?></td>
                                            <td><?php echo $row['kecamatan']; ?></td>
                                            <td><?php echo $row['bencana']; ?></td>
                                            <td><?php echo $row['tgl_kejadian']; ?></td>
                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#detail<?php echo $row['id_rekap']; ?>">Detail</a>
                                            </td>
                                            <td><?php
                                                if ($row['status'] == 0) { ?>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row['id_rekap']; ?>">Belum diterima</a>
                                                <?php } else { ?>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row['id_rekap']; ?>">Diterima</a>
                                                <?php } ?>
                                            </td>
                                            <!-- <td>
                                                <a class="edit" href="editKejadian.php?id=<?php echo $row['id_bencana']; ?>">Edit</a> |
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $row['id_bencana']; ?>">Hapus</a>
                                            </td> -->
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>

                            <nav>
                                <ul class="pagination pagination-sm">
                                    &emsp; &emsp;
                                    <li class="page-item">
                                        <a class="page-link" <?php if ($page > 1) {
                                                                    echo "href='?halaman=$previous'";
                                                                } ?>>Previous</a>
                                    </li>
                                    <?php
                                    for ($x = 1; $x <= $pages; $x++) {
                                    ?>
                                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="page-item">
                                        <a class="page-link" <?php if ($page < $pages) {
                                                                    echo "href='?halaman=$next'";
                                                                } ?>>Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->


            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="js/custom.js"></script>
    <?php foreach ($sql as $key => $row) { ?>
        <div class="modal fade" id="detail<?php echo $row['id_rekap']; ?>" tabindex="-1" aria-labelledby="statusLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5" id="statusLabel">Detail Kejadian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Desa</label>
                                <input class="form-control" type="text" value="<?php echo $row['desa']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                                <input class="form-control" type="text" value="<?php echo $row['kecamatan']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">RT</label>
                                <input class="form-control" type="text" value="<?php echo $row['rt']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">RW</label>
                                <input class="form-control" type="text" value="<?php echo $row['rw']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                        <hr class="sidebar-divider" />
                        <div class="row">
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Bencana</label>
                                <input class="form-control" type="text" value="<?php echo $row['bencana']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                <input class="form-control" type="text" value="<?php echo $row['tgl_kejadian']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                        <hr class="sidebar-divider" />
                        <div class="row">
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Kama KK</label>
                                <input class="form-control" type="text" value="<?php echo $row['nama_kk']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Jumlah Jiwa</label>
                                <input class="form-control" type="text" value="<?php echo $row['jumlah_jiwa']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                        <hr class="sidebar-divider" />
                        <div class="row">
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Rusak Ringan</label>
                                <input class="form-control" type="text" value="<?php echo $row['rusak_ringan']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Rusak Sedang</label>
                                <input class="form-control" type="text" value="<?php echo $row['rusak_sedang']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Rusak Berat</label>
                                <input class="form-control" type="text" value="<?php echo $row['rusak_berat']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Terancam</label>
                                <input class="form-control" type="text" value="<?php echo $row['terancam']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                        <hr class="sidebar-divider" />
                        <div class="row">
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Meninggal Dunia</label>
                                <input class="form-control" type="text" value="<?php echo $row['meninggal_dunia']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Luka Luka</label>
                                <input class="form-control" type="text" value="<?php echo $row['luka_luka']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Kronologi</label>
                            <textarea type="text" name="kendala" class="form-control" id="kronologi" rows="3" value="" aria-label="Disabled input example" disabled readonly><?php echo $row['kronologi'] ?></textarea>
                        </div>
                        <div class="form-group col-sm">
                            <label for="exampleFormControlInput1" class="form-label">Kerugian</label>
                            <input class="form-control" type="text" value="<?php echo $row['kerugian']; ?>" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <hr class="sidebar-divider" />
                        <div class="row">
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Latitude</label>
                                <input class="form-control" type="text" value="<?php echo $row['latitude']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                            <div class="form-group col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Longitude</label>
                                <input class="form-control" type="text" value="<?php echo $row['longitude']; ?>" aria-label="Disabled input example" disabled readonly>
                            </div>
                        </div>
                        <hr class="sidebar-divider" />
                        <div class="form-grouo">
                            <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                            <img src="../html/img/img/<?php echo $row['gambar']; ?>" alt="" width="100%" class="img-thumbnail">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>

                </div>
            </div>
        </div>
    <?php } ?>
    <?php foreach ($sql as $key => $row) { ?>
        <div class="modal fade" id="modal<?php echo $row['id_rekap']; ?>" tabindex="-1" aria-labelledby="statusLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Valiadasi Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="aksi_status.php" method="post">
                            <input type="hidden" class="form-control" name="id_rekap" value="<?php echo $row['id_rekap'] ?>">
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">Diterima</option>
                                <option value="0">Belum Diterima</option>
                            </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Logout?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>