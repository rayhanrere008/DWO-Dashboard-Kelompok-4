<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Data Warehouse 2023 - Finance</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

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
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>DW Sales</span>
                    </a>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Chart Sales</h6>
                            <a class="collapse-item" href="sales_person_chart.php">Sales Person Chart</a>
                            <a class="collapse-item active" href="finance_chart.php">Finance Chart</a>
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
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
                            <h1 class="h3 mb-0 text-gray-800">Finance</h1>
                        </div>

                        <!-- Content Kotak Row -->
                        <div class="row">
                            <!-- Total Jumlah Transaksi -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Total Jumlah Transaksi
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php  
                                                    $host       = "localhost";
                                                    $user       = "root";
                                                    $password   = "";
                                                    $database   = "dwsales";
                                                    $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                    $sql = "SELECT COUNT(OrderDate) as total_transaksi from fakta_sales";
                                                    $query = mysqli_query($mysqli,$sql);
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo number_format($row2['total_transaksi'],0,".",",");
                                                    }
                                                    ?>  
                                                    </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calculator fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Jumlah Pendapatan -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Total Jumlah Pendapatan
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                $sql = "SELECT SUM(TotalDue) as jumlah_pendapatan from fakta_sales";
                                                $query = mysqli_query($mysqli,$sql);
                                                    while($row2=mysqli_fetch_array($query)){
                                                        echo number_format($row2['jumlah_pendapatan'],0,".",",");
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
                        </div>

                        <!-- Content Grafik Row -->
                        <div class="row">
                            <!-- Column Chart Per Territory -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Jumlah Transaksi Per Wilayah Territory</h6>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                                $host       = "localhost";
                                                $user       = "root";
                                                $password   = "";
                                                $database   = "dwsales";
                                                $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                // Mengambil data dari database
                                                $query = "SELECT st.Name, COUNT(fs.OrderDate) as total_order
                                                FROM salesterritory st  
                                                JOIN fakta_sales fs ON st.TerritoryID = fs.TerritoryID 
                                                group by Name";
                                                $result = mysqli_query($mysqli, $query);

                                                // Membentuk array untuk data grafik
                                                $data = array();
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $data[] = array(
                                                        'name' => $row['Name'],
                                                        'y' => (int)$row['total_order']
                                                    );
                                                }
                                                ?>
                                                <div class="highcharts">
                                                    <div id="container"></div>
                                                    <script>
                                                    // Menginisialisasi grafik Highcharts
                                                    Highcharts.chart('container', {
                                                        chart: {
                                                            type: 'column'
                                                        },
                                                        title: {
                                                            text: 'Jumlah Transaksi per Wilayah'
                                                        },
                                                        xAxis: {
                                                            type: 'category'
                                                        },
                                                        yAxis: {
                                                            title: {
                                                                text: 'Jumlah Transaksi'
                                                            }
                                                        },
                                                        legend: {
                                                            enabled: false
                                                        },
                                                        series: [{
                                                            name: 'Total Transaksi per Territory',
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
                            <!-- Akhir Column Chart Per Territory -->
                            <!-- Line Chart Per CardType -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Jumlah Transaksi Per Credit Card</h6>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                                $host       = "localhost";
                                                $user       = "root";
                                                $password   = "";
                                                $database   = "dwsales";
                                                $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                // Mengambil data dari database
                                                $query = "SELECT cc.CardType, COUNT(fs.OrderDate) as total_order
                                                FROM creditcard cc
                                                JOIN fakta_sales fs ON cc.CreditCardID = fs.CreditCardID  
                                                group by CardType";
                                                $result = mysqli_query($mysqli, $query);

                                                // Membentuk array untuk data grafik
                                                $data = array();
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $data[] = array(
                                                        'name' => $row['CardType'],
                                                        'y' => (int)$row['total_order']
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
                                                            text: 'Jumlah Transaksi per Credit Card'
                                                        },
                                                        xAxis: {
                                                            type: 'category'
                                                        },
                                                        yAxis: {
                                                            title: {
                                                                text: 'Jumlah Transaksi'
                                                            }
                                                        },
                                                        legend: {
                                                            enabled: false
                                                        },
                                                        series: [{
                                                            name: 'Total Transaksi di Credit Card',
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
                            <!-- Akhir Line Chart Per CardType -->
                            <!-- Bar Chart Total Pendapatan per Wilayah -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Jumlah Pendapatan Per Territory"</h6>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                                $host       = "localhost";
                                                $user       = "root";
                                                $password   = "";
                                                $database   = "dwsales";
                                                $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                // Mengambil data dari database
                                                $query = "SELECT st.Name, round(sum(fs.TotalDue)) as total_pendapatan
                                                FROM salesterritory st
                                                JOIN fakta_sales fs ON st.TerritoryID = fs.TerritoryID 
                                                group by Name";
                                                $result = mysqli_query($mysqli, $query);

                                                // Membentuk array untuk data grafik
                                                $data = array();
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $data[] = array(
                                                        'name' => $row['Name'],
                                                        'y' => (int)$row['total_pendapatan']
                                                    );
                                                }
                                                ?>
                                                <div class="highcharts">
                                                    <div id="container3"></div>
                                                    <script>
                                                    // Menginisialisasi grafik Highcharts
                                                    Highcharts.chart('container3', {
                                                        chart: {
                                                            type: 'bar'
                                                        },
                                                        title: {
                                                            text: 'Jumlah Pendapatan per Territory'
                                                        },
                                                        xAxis: {
                                                            type: 'category'
                                                        },
                                                        yAxis: {
                                                            title: {
                                                                text: 'Jumlah Pendapatan'
                                                            }
                                                        },
                                                        legend: {
                                                            enabled: false
                                                        },
                                                        series: [{
                                                            name: 'Total Transaksi di Territory',
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
                            <!-- Akhir Bar Chart Total Pendapatan per wilayah -->
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

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>
        
        <!-- Page level custom scripts -->
        <script type="text/javascript">
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

            function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
            }

            // Area Chart Example
            <?php
                $host= "localhost";
                $user= "root";
                $password= "";
                $database= "whsakila2021";
                $conn= mysqli_connect($host, $user, $password, $database);
                $bulan = "SELECT CONCAT(MONTHNAME(t.tanggallengkap), ' ', YEAR(t.tanggallengkap)) bulan 
                    FROM fakta_pendapatan f JOIN time t ON f.time_id=t.time_id 
                    GROUP BY t.bulan 
                    ORDER BY t.tanggallengkap";
                $amount = "SELECT SUM(f.amount) amount FROM fakta_pendapatan f JOIN time t ON f.time_id=t.time_id GROUP BY t.bulan ORDER BY t.tanggallengkap";
                $i=1;
                $query_bulan=mysqli_query($conn, $bulan);
                $jumlah_bulan = mysqli_num_rows($query_bulan);
                $chart_bulan="";
                while($row=mysqli_fetch_array($query_bulan)){
                if ($i<$jumlah_bulan) {
                    $chart_bulan.='"';
                    $chart_bulan.=$row['bulan'];
                    $chart_bulan.='",';
                    $i++;
                }else{
                    $chart_bulan.='"';
                    $chart_bulan.=$row['bulan'];
                    $chart_bulan.='"';
                }
                }
                $a=1;
                $query_amount = mysqli_query($conn, $amount);
                $jumlah_amount = mysqli_num_rows($query_amount);
                $chart_amount="";
                while ($row1=mysqli_fetch_array($query_amount)) {
                    if ($a<$jumlah_amount) {
                        $chart_amount.=$row1['amount'];
                        $chart_amount.=',';
                        $a++;
                    }else{
                        $chart_amount.=$row1['amount'];
                    }
                }
            ?>
            var ctx = document.getElementById("myAreaChart");
            var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo $chart_bulan; ?>],
                datasets: [{
                label: "Earnings",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_amount;?>],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
                },
                scales: {
                xAxes: [{
                    time: {
                    unit: 'date'
                    },
                    gridLines: {
                    display: false,
                    drawBorder: false
                    },
                    ticks: {
                    maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return '$' + number_format(value);
                    }
                    },
                    gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                    }
                }],
                },
                legend: {
                display: false
                },
                tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                    }
                }
                }
            }
            });
        </script>
        <script src="js/demo/chart-bar-demo3.js"></script>
    </body>
</html>