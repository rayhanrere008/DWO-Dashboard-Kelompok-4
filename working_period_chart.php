<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Data Warehouse 2023 - Employee</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <script src='https://code.highcharts.com/highcharts.js'></script>
        <link rel="stylesheet" href="css/drilldown.css"/>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="awal.php">
                    <div class="sidebar-brand-text mx-3">Data Warehouse 2023</div>
                </a>
                <!-- End Sidebar - Brand -->

                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="awal.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    Menu DW
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>DW Sales</span>
                    </a>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Chart Sales</h6>
                            <a class="collapse-item" href="sales_person_chart.php">Sales Person Chart</a>
                            <a class="collapse-item" href="finance_chart.php">Finance Chart</a>
                            <a class="collapse-item" href="product_chart.php">Product Chart</a>
                            <a class="collapse-item" href="credit_card_chart.php">Credit Card Chart</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>DW Human Resource</span>
                    </a>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Chart Human Resource</h6>
                            <a class="collapse-item" href="employee_chart.php">Employee Chart</a>
                            <a class="collapse-item" href="department_chart.php">Department Chart</a>
                            <a class="collapse-item" href="shift_chart.php">Shift Chart</a>
                            <a class="collapse-item active" href="working_period_chart.php">Working Period Chart</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mondrian</span>
                    </a>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mondrian DW</h6>
                            <a class="collapse-item" href="mondrian_sales.php">Sales</a>
                            <a class="collapse-item" href="mondrian_human_resource.php">Human Resource</a>
                        </div>
                    </div>
                </li>
                <!-- End Nav Item - Dashboard -->

                <hr class="sidebar-divider">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <div class="input-group" style="margin-left: 10px; color: #000000; font-weight: 500; font-size: 15pt">
                            Welcome, Admin!
                        </div>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Keluar
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Working Periode</h1>
                        </div>

                        <!-- Content Kotak Row -->
                        <div class="row">
                            <!-- Awal Jumlah Employee Berhenti Bekerja -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Jumlah Employee yang sudah Berhenti Bekerja</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php  
                                                    $host       = "localhost";
                                                    $user       = "root";
                                                    $password   = "";
                                                    $database   = "dwhuman_resources";
                                                    $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                        $sql = "SELECT COUNT(DISTINCT(EmployeeID)) as jumlah_employee from fakta_humanresource WHERE lamabekerja_tahun > 0";
                                                        $query = mysqli_query($mysqli,$sql);
                                                            while($row2=mysqli_fetch_array($query)){
                                                                echo number_format($row2['jumlah_employee'],0,".",",");
                                                            }
                                                    ?>  
                                                    </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Jumlah Employee Berhenti Bekerja -->

                            <!-- Awal Jumlah Employee Bekerja > 1 Tahun -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Jumlah Employee yang Bekerja > 1 Tahun</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                $sql = "SELECT COUNT(DISTINCT(EmployeeID)) as employee_year FROM fakta_humanresource WHERE lamabekerja_tahun > 1";
                                                $query = mysqli_query($mysqli,$sql);
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo number_format($row2['employee_year'],0,".",",");
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Jumlah Employee Bekerja > 1 Tahun -->

                            <!-- Awal Jumlah Employee Bekerja > 16 Bulan -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Jumlah Employee yang Bekerja > 16 Bulan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                $sql = "SELECT COUNT(DISTINCT(EmployeeID)) as employee_month FROM fakta_humanresource WHERE lamabekerja_bulan > 16";
                                                $query = mysqli_query($mysqli,$sql);
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo number_format($row2['employee_month'],0,".",",");
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Jumlah Employee Bekerja > 16 Bulan -->

                            <!-- Awal Jumlah Employee Bekerja > 1000 Hari -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Jumlah Employee yang Bekerja > 1000 Hari</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                $sql = "SELECT COUNT(DISTINCT(EmployeeID)) as employee_day FROM fakta_humanresource WHERE lamabekerja_hari > 1000";
                                                $query = mysqli_query($mysqli,$sql);
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo number_format($row2['employee_day'],0,".",",");
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Jumlah Employee Bekerja > 1000 hari -->
                        </div>
                        <!-- Content Grafik Row -->
                        <div class="row">
                            <!-- Pie Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Lama Bekerja Employee di Perusahaan dalam Tahun</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <?php
                                            $host       = "localhost";
                                            $user       = "root";
                                            $password   = "";
                                            $database   = "dwhuman_resources";
                                            $mysqli     = mysqli_connect($host, $user, $password, $database);

                                            // Mengambil data dari database
                                            $query = "SELECT e.LoginID, SUM(distinct fh.lamabekerja_tahun) as total_bekerja
                                            from employee e 
                                            JOIN fakta_humanresource fh ON e.EmployeeID = fh.EmployeeID 
                                            where lamabekerja_tahun is not null 
                                            group by LoginID";
                                            $result = mysqli_query($mysqli, $query);

                                            // Membentuk array untuk data grafik
                                            $data = array();
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $data[] = array(
                                                    'name' => $row['LoginID'],
                                                    'y' => (int)$row['total_bekerja']
                                                );
                                            }
                                            ?>
                                            <div class="highcharts">
                                                <div id="container"></div>
                                                <script>
                                                    // Menginisialisasi grafik Highcharts
                                                    Highcharts.chart('container', {
                                                        chart: {
                                                            type: 'pie'
                                                        },
                                                        title: {
                                                            text: 'Lama Bekerja dalam Tahun'
                                                        },
                                                        xAxis: {
                                                            type: 'category'
                                                        },
                                                        yAxis: {
                                                            title: {
                                                                text: 'Lama Bekerja dalam Tahun'
                                                            }
                                                        },
                                                        legend: {
                                                            enabled: false
                                                        },
                                                        series: [{
                                                            name: 'Total Tahun Bekerja',
                                                            data: <?php echo json_encode($data); ?>,
                                                            dataLabels: {
                                                                enabled: true,
                                                                format: '{point.y}'
                                                            }
                                                        }]
                                                    });
                                                </script>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Pie Chart -->
                            <!-- line Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Lama Bekerja Employee di Perusahaan dalam Bulan</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <?php
                                            $host       = "localhost";
                                            $user       = "root";
                                            $password   = "";
                                            $database   = "dwhuman_resources";
                                            $mysqli     = mysqli_connect($host, $user, $password, $database);

                                            // Mengambil data dari database
                                            $query = "SELECT e.LoginID, SUM(DISTINCT fh.lamabekerja_bulan) as total_bekerja_bulan
                                            from employee e 
                                            JOIN fakta_humanresource fh ON e.EmployeeID = fh.EmployeeID 
                                            where lamabekerja_bulan is not null 
                                            group by LoginID";
                                            $result = mysqli_query($mysqli, $query);

                                            // Membentuk array untuk data grafik
                                            $data = array();
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $data[] = array(
                                                    'name' => $row['LoginID'],
                                                    'y' => (int)$row['total_bekerja_bulan']
                                                );
                                            }
                                            ?>
                                            <div class="highcharts">
                                                <div id="container1"></div>
                                                <script>
                                                    // Menginisialisasi grafik Highcharts
                                                    Highcharts.chart('container1', {
                                                        chart: {
                                                            type: 'line'
                                                        },
                                                        title: {
                                                            text: 'Lama Bekerja dalam Bulan'
                                                        },
                                                        xAxis: {
                                                            type: 'category'
                                                        },
                                                        yAxis: {
                                                            title: {
                                                                text: 'Lama Bekerja dalam Bulan'
                                                            }
                                                        },
                                                        legend: {
                                                            enabled: false
                                                        },
                                                        series: [{
                                                            name: 'Total Bulan Bekerja',
                                                            data: <?php echo json_encode($data); ?>,
                                                            dataLabels: {
                                                                enabled: true,
                                                                format: '{point.y}'
                                                            }
                                                        }]
                                                    });
                                                </script>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Line Chart -->
                            <!-- Column Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Lama Bekerja Employee di Perusahaan dalam Hari</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <?php
                                            $host       = "localhost";
                                            $user       = "root";
                                            $password   = "";
                                            $database   = "dwhuman_resources";
                                            $mysqli     = mysqli_connect($host, $user, $password, $database);

                                            // Mengambil data dari database
                                            $query = "SELECT e.LoginID, SUM(DISTINCT fh.lamabekerja_hari) as total_bekerja_hari
                                            from employee e 
                                            JOIN fakta_humanresource fh ON e.EmployeeID = fh.EmployeeID 
                                            where lamabekerja_hari is not null 
                                            group by LoginID";
                                            $result = mysqli_query($mysqli, $query);

                                            // Membentuk array untuk data grafik
                                            $data = array();
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $data[] = array(
                                                    'name' => $row['LoginID'],
                                                    'y' => (int)$row['total_bekerja_hari']
                                                );
                                            }
                                            ?>
                                            <div class="highcharts">
                                                <div id="container2"></div>
                                                <script>
                                                    // Menginisialisasi grafik Highcharts
                                                    Highcharts.chart('container2', {
                                                        chart: {
                                                            type: 'column'
                                                        },
                                                        title: {
                                                            text: 'Lama Bekerja dalam Hari'
                                                        },
                                                        xAxis: {
                                                            type: 'category'
                                                        },
                                                        yAxis: {
                                                            title: {
                                                                text: 'Lama Bekerja dalam Hari'
                                                            }
                                                        },
                                                        legend: {
                                                            enabled: false
                                                        },
                                                        series: [{
                                                            name: 'Total Hari Bekerja',
                                                            data: <?php echo json_encode($data); ?>,
                                                            dataLabels: {
                                                                enabled: true,
                                                                format: '{point.y}'
                                                            }
                                                        }]
                                                    });
                                                </script>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Line Chart -->
                        </div>
                        <!-- End Of Row -->
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- End Scroll to Top Button-->

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Silahkan klik "Keluar" jika Anda yakin.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <a class="btn btn-primary" href="login.html">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Logout Modal-->

        <!-- Chart Drilldown -->
        

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="js/demo/chart-bar-demo2.js"></script>
    </body>
</html>