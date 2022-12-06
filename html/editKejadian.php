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
    <link rel="icon" type="image/png" sizes="16x16" href="img/wave.png">
    <!-- chartist CSS -->
    <!-- <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ms-4" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-light-text.png" alt="homepage" class="dark-logo" />

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
                                <img class="profile-pic me-2" src="../html/img/user/<?php echo $_SESSION['image']; ?>" />
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama']; ?></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.html" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-bencana.php" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span class="hide-menu">Table Bencana</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-data-table.php" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span class="hide-menu">Table</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-pelaporan.php" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span class="hide-menu">Pelaporan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="kritik.php" aria-expanded="false"><i class="mdi me-2 mdi-lead-pencil"></i><span class="hide-menu">Kritik & Saran</span></a></li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="logout.php" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
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
                        <h3 class="page-title mb-0 p-0">Update Kejadian Bencana</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Kejadian Bencana</li>
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
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Update Data Kejadian Bencana</h1>
                </div>
                <hr class="sidebar-divider d-none d-md-block" />
                <div class="card-body">

                    <form method="POST" action="update/updateKejadian.php" enctype="multipart/form-data">

                        <div class="row">
                            <div class="md-3 col-sm">
                                <div class="row form-group">
                                    <label for="date" class="form-label">Tanggal</label>
                                    <div class="input-group date" id="datepicker">
                                        <input type="hidden" class="form-control" name="id_rekap" value="<?php echo $row['id_rekap'] ?>">
                                        <input type="text" class="form-control" name="tgl_kejadian" id="from-datepicker" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Bencana</label>
                                <select class="form-select" name="id_bencana_detail">
                                    <option disabled selected>Open this select menu</option>
                                    <?php
                                    $conn = mysqli_connect('localhost', 'root', '', 'aplikasi');
                                    $sql = mysqli_query($conn, "SELECT * FROM bencana_detail");
                                    while ($row = mysqli_fetch_array($sql)) {
                                    ?>
                                        <option value="<?php echo $row['id_bencana_detail']; ?>"><?php echo $row['bencana']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <hr class=" sidebar-divider d-none d-md-block" />
                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'aplikasi');
                        $id = $_GET['id'];
                        $sql = mysqli_query($conn, "SELECT * FROM rekap_bencana 
                        JOIN desa_detail ON rekap_bencana.id_desa_detail = desa_detail.id_desa_detail
                        JOIN kec_detail ON desa_detail.kecamatan = kec_detail.kecamatan WHERE id_rekap='$id'");
                        $no = 1;
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                            <div class="row">
                                <div class="mb-3 col-sm">
                                    <label for="exampleFormControlInput1" class="form-label">Nama KK</label>
                                    <input type="text" name="nama_kk" class="form-control" id="nama_kk" value="<?php echo $row['nama_kk'] ?>">
                                </div>
                                <div class="mb-3 col-sm">
                                    <label for="exampleFormControlInput1" class="form-label">Jumlah jiwa</label>
                                    <input type="text" name="jumlah_jiwa" class="form-control" id="jumlah_jiwa" value="<?php echo $row['jumlah_jiwa'] ?>">
                                </div>
                                <div class="mb-3 col-sm">
                                    <label for="exampleFormControlInput1" class="form-label">RT</label>
                                    <input type="text" name="rt" class="form-control" id="rt" value="<?php echo $row['rt'] ?>">
                                </div>
                                <div class="mb-3 col-sm">
                                    <label for="exampleFormControlInput1" class="form-label">RW</label>
                                    <input type="text" name="rw" class="form-control" id="rw" value="<?php echo $row['rw'] ?>">
                                </div>
                            </div>

                            <div class="mb-3 col-sm">
                                <label for="exampleFormControlInput1" class="form-label">Desa</label>
                                <select class="form-select" name="id_desa_detail" id="desa">
                                    <option disabled selected>Open this select menu</option>
                                    <option value="<?php echo $row['id_desa_detail']; ?>"><?php echo $row['desa']; ?>, <?php echo $row['kecamatan'] ?></option>
                                </select>
                            </div>
                            <hr class=" sidebar-divider d-none d-md-block" />
                            <div class="row">
                                <div class="mb-3 col-sm">
                                    <label for="exampleFormControlInput1" class="form-label">Rusak Ringan</label>
                                    <input type="text" name="rusak_ringan" class="form-control" id="rusak_ringan" value="<?php echo $row['rusak_ringan'] ?>">
                                </div>
                                <div class=" mb-3 col-sm">
                                    <label for="exampleFormControlInput1" class="form-label">Rusak Sedang</label>
                                    <input type="text" name="rusak_sedang" class="form-control" id="rusak_sedang" value="<?php echo $row['rusak_sedang'] ?>">
                                </div>
                                <div class=" mb-3 col-sm">
                                    <label for="exampleFormControlInput1" class="form-label">Rusak Berat</label>
                                    <input type="text" name="rusak_berat" class="form-control" id="rusak_berat" value="<?php echo $row['rusak_berat'] ?>">
                                </div>
                                <div class=" mb-3 col-sm">
                                    <label for="exampleFormControlInput1" class="form-label">Terancam</label>
                                    <input type="text" name="terancam" class="form-control" id="terancam" value="<?php echo $row['terancam'] ?>">
                                </div>
                            </div>
                            <hr class=" sidebar-divider d-none d-md-block" />
                            <div class="row">
                                <div class="mb-3 col-sm">
                                    <label for="exampleFormControlInput1" class="form-label">Meninggal Dunia</label>
                                    <input type="text" name="meninggal_dunia" class="form-control" id="meninggal_dunia" value="<?php echo $row['meninggal_dunia'] ?>">
                                </div>
                                <div class=" mb-3 col-sm">
                                    <label for="exampleFormControlInput1" class="form-label">Luka Luka</label>
                                    <input type="text" name="luka_luka" class="form-control" id="luka_luka" value="<?php echo $row['luka_luka'] ?>">
                                </div>
                            </div>

                            <hr class="sidebar-divider d-none d-md-block" />
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kondisi Umum/Kronologi</label>
                                <textarea type="text" name="kronologi" class="form-control" id="kronologi" rows="3" value=""><?php echo $row['kronologi'] ?></textarea>
                            </div>
                            <div class=" mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kerugian</label>
                                <input type="text" name="kerugian" class="form-control" id="kerugian" value="<?php echo $row['kerugian'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control-file" id="foto" placeholder="foto" autocomplete="off" required="required" name="foto">
                                *gambar sebelumnya <br>
                                <img src="../html/img/img/<?= $row['gambar'] ?>" alt="<?= $row['gambar'] ?>" width="100%" class="mt-2">
                            </div>

                            <div id="googleMap" style="width:100%;height:380px;"></div>

                            <div class="form-group md-3">
                                <input type="text" id="lat" name="latitude" value="<?php echo $row['latitude'] ?>">
                                <input type="text" id="lng" name="longitude" value="<?php echo $row['longitude'] ?>">
                            </div>
                        <?php
                        }
                        ?>
                        <div class="mb-3">
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                        </div>

                    </form>

                </div>
                <!-- Content Row -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2022 Dwika Julian Azhar <a href="https://www.wrappixel.com/">wrappixel.com </a>
            </footer>
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
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOzM6VFaaZAhACegR4hwS3wSB8po5kzU"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#from-datepicker").datepicker({
                format: 'yyyy-mm-dd'
            });
            // $("#from-datepicker").on("change", function() {
            //     var fromdate = $(this).val();
            //     alert(fromdate);
            // });
        });
    </script>
    <script>
        // variabel global marker
        var marker;

        function taruhMarker(peta, posisiTitik) {

            if (marker) {
                // pindahkan marker
                marker.setPosition(posisiTitik);
            } else {
                // buat marker baru
                marker = new google.maps.Marker({
                    position: posisiTitik,
                    map: peta
                });
            }

            // isi nilai koordinat ke form
            document.getElementById("lat").value = posisiTitik.lat();
            document.getElementById("lng").value = posisiTitik.lng();

        }

        function initialize() {
            var propertiPeta = {
                center: new google.maps.LatLng(-7.451861017881536, 109.46149136474253),
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

            // even listner ketika peta diklik
            google.maps.event.addListener(peta, 'click', function(event) {
                taruhMarker(this, event.latLng);
            });

        }


        // event jendela di-load
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</body>

</html>