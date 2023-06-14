<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Data Warehouse 2023 - Dashboard</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <!-- <link rel="stylesheet" href="/drilldown.css"/> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-text mx-3">Data Warehouse 2023</div>
                </a>
                <!-- End Sidebar - Brand -->

                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
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
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordionSidebar">
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
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>DW Human Resource</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Chart Human Resource</h6>
                            <a class="collapse-item" href="employee_chart.php">Employee Chart</a>
                            <a class="collapse-item" href="department_chart.php">Department Chart</a>
                            <a class="collapse-item" href="shift_chart.php">Shift Chart</a>
                            <a class="collapse-item" href="working_period_chart.php">Working Period Chart</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                        aria-controls="collapseThree">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mondrian</span>
                    </a>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionSidebar">
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
                        <!-- Dashboard Sales -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-3">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard Sales</h1>
                        </div>
                        <!-- Content Sales -->
                        <div class="row">
                            <!-- Total Pendapatan -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Total Pendapatan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php  
                                                        $host       = "localhost";
                                                        $user       = "root";
                                                        $password   = "";
                                                        $database   = "dwsales";
                                                        $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                        $sql = "SELECT SUM(TotalDue) as jumlah_pendapatan from fakta_sales";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo "$".number_format($row2['jumlah_pendapatan'],0,".",",");
                                                        }
                                                    ?>  
                                                    </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Jumlah Transaksi -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Jumlah Transaksi</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $sql = "SELECT COUNT(OrderDate) as total_transaksi from fakta_sales";
                                                    $query = mysqli_query($mysqli,$sql);
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo number_format($row2['total_transaksi'],0,".",",");
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fa fa-shopping-basket fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Jumlah Sales Person-->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Sales Person
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?php
                                                        $sql = "SELECT SUM(total_salesperson) AS total_sales
                                                        FROM (
                                                            SELECT COUNT(sp.salespersonid) AS total_salesperson
                                                            FROM salesterritory t
                                                            JOIN fakta_sales sp ON t.territoryid = sp.territoryid
                                                            GROUP BY t.name
                                                        ) AS subquery";
                                                        $query = mysqli_query($mysqli,$sql);
                                                            while($row2=mysqli_fetch_array($query)){
                                                                echo number_format($row2['total_sales'],0,".",",");
                                                            }
                                                        ?>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Jumlah Product -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Jumlah Product</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                        $sql = "SELECT COUNT(ProductID) as jumlah_produk from salesorderdetail";
                                                        $query = mysqli_query($mysqli,$sql);
                                                            while($row2=mysqli_fetch_array($query)){
                                                                echo number_format($row2['jumlah_produk'],0,".",",");
                                                            }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-regular fa-briefcase fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dashboard Human Resource -->
                        <div class="d-sm-flex align-items-center justify-content-between mt-5 mb-3">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard Human Resource</h1>
                        </div>
                        <!-- Content Human Resource -->
                        <div class="row">
                            <!-- Total Employee -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Jumlah Employee</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php  
                                                    $host       = "localhost";
                                                    $user       = "root";
                                                    $password   = "";
                                                    $database   = "dwhuman_resources";
                                                    $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                        $sql = "SELECT COUNT(EmployeeID) as jumlah_employee from employee";
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
                            <!-- Jumlah Department -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Jumlah Department</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php  
                                                    $host       = "localhost";
                                                    $user       = "root";
                                                    $password   = "";
                                                    $database   = "dwhuman_resources";
                                                    $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                        $sql = "SELECT COUNT(DepartmentID) as jumlah_department from department";
                                                        $query = mysqli_query($mysqli,$sql);
                                                            while($row2=mysqli_fetch_array($query)){
                                                                echo number_format($row2['jumlah_department'],0,".",",");
                                                            }
                                                    ?>  
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fa fa-regular fa-briefcase fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Jumlah Shift -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Shift
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?php  
                                                        $host       = "localhost";
                                                        $user       = "root";
                                                        $password   = "";
                                                        $database   = "dwhuman_resources";
                                                        $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                        $sql = "SELECT COUNT(DISTINCT(ShiftID)) as jumlah_shift from employeedepartmenthistory";
                                                        $query = mysqli_query($mysqli,$sql);
                                                            while($row2=mysqli_fetch_array($query)){
                                                                echo number_format($row2['jumlah_shift'],0,".",",");
                                                            }
                                                    ?>  
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fa fa-regular fa-business-time fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Jumlah Employee Berhenti Bekerja -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Jumlah Employee Berhenti Bekerja</div>
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
                        </div>
                    </div>    
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2023</span>
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

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>             
    </body>
</html>
