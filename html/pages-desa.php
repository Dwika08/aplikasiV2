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
    <title>Admin SiPENA</title>
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
                        <h3 class="page-title mb-0 p-0">Table Desa</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="pages-data-table.php">Data Tabel</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Table Desa</li>
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
                    }
                }
                ?>
                <?php include 'conn.php'; ?>
                <!-- Page Heading -->
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal" class="btn btn-primary btn-ms active" role="button" aria-pressed="true">Tambah Data</a>
                <p></p>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Desa</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <!-- <th>No</th> -->
                                    <th>ID</th>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th>Opsi</th>
                                </thead>
                                <?php

                                $halaman = 10;
                                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                                $mulai = ($page > 1) ? ($page * $halaman) - $halaman : 0;

                                $previous = $page - 1;
                                $next = $page + 1;

                                $result = mysqli_query($conn, "SELECT * FROM desa_detail");
                                $total = mysqli_num_rows($result);
                                $pages = ceil($total / $halaman);
                                $sql = mysqli_query($conn, "SELECT * FROM desa_detail 
                                JOIN kec_detail ON desa_detail.id_kec_detail = kec_detail.id_kec_detail LIMIT $mulai, $halaman ");

                                $no = $mulai + 1;
                                while ($row = mysqli_fetch_array($sql)) {
                                ?>
                                    <tbody>
                                        <td><?php echo $no++; ?></td>
                                        <!-- <td><?php echo $row['id_desa_detail']; ?></td> -->
                                        <td><?php echo $row['desa']; ?></td>
                                        <td><?php echo $row['kecamatan']; ?></td>

                                        <td>

                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id_desa_detail']; ?>">Edit</a> |
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $row['id_desa_detail']; ?>">Hapus</a>
                                        </td>
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
                            <!-- <?php for ($i = 1; $i <= $pages; $i++) { ?>
                                <div class="btn btn-primary">
                                    <a href="?halaman=<?php echo $i; ?>" class="page-item active" aria-current="page"> <?php echo $i; ?></a>
                                </div>
                            <?php } ?> -->
                        </div>
                    </div>
                </div>
                <!-- Content Row -->


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
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
    <?php foreach ($sql as $key => $row) { ?>
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input Desa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="input/desa_aksi.php">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Desa</label>
                                <input type="text" class="form-control" name="desa" id="desa" placeholder="Desa">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                                <select name="kecamatan" id="kecamatan" class="form-control">
                                    <option selected disabled>Default select</option>
                                    <?php
                                    $kec = mysqli_query($conn, "SELECT * FROM kec_detail");
                                    while ($row = mysqli_fetch_array($kec)) {
                                    ?>
                                        <option value="<?php echo $row['id_kec_detail']; ?>"> <?php echo $row['kecamatan'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" value="Submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php foreach ($sql as $key => $row) { ?>
        <div class="modal fade" id="edit<?php echo $row['id_desa_detail']; ?>" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Desa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="update/updateDesa.php">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Desa</label>
                                <input type="hidden" class="form-control" name="id_desa_detail" value="<?php echo $row['id_desa_detail']; ?>">
                                <input type="text" class="form-control" name="desa" id="desa" value="<?php echo $row['desa']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                                <select name="kecamatan" id="kecamatan" class="form-control">
                                    <option selected disabled>Default select</option>
                                    <?php
                                    $kec = mysqli_query($conn, "SELECT * FROM kec_detail");
                                    while ($row = mysqli_fetch_array($kec)) {
                                    ?>
                                        <option value="<?php echo $row['kecamatan']; ?>"> <?php echo $row['kecamatan']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" value="Submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>


    <?php foreach ($sql as $key => $row) { ?>
        <div class="modal fade" id="hapus<?php echo $row['id_desa_detail']; ?>" tabindex="-1" aria-labelledby="statusLabel" aria-hidden="true">
            <div class="modal-dialog modal-ms modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Yakin Hapus Data ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="delete/del_desa.php?id=<?php echo $row['id_desa_detail']; ?>">Yes</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</body>

</html>