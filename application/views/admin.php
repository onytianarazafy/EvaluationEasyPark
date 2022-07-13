<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Monster Lite Template by WrapPixel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url('assets/admin/images/favicon.png')?>">
    <link href="<?php echo site_url('assets/admin/plugins/chartist/dist/chartist.min.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/admin/css/style.min.css')?>" rel="stylesheet">
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>

    <!-- Fontfaces CSS-->
	<link href="<?php echo site_url('assets/PopUp/css/font-face.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo site_url('assets/PopUp/vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo site_url('assets/PopUp/vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo site_url('assets/PopUp/vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="<?php echo site_url('assets/PopUp/vendor/bootstrap-4.1/bootstrap.min.css')?>" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="<?php echo site_url('assets/PopUp/vendor/animsition/animsition.min.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo site_url('assets/PopUp/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>""" rel="stylesheet" media="all">
	<link href="<?php echo site_url('assets/PopUp/vendor/wow/animate.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo site_url('assets/PopUp/vendor/css-hamburgers/hamburgers.min.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo site_url('assets/PopUp/vendor/slick/slick.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo site_url('assets/PopUp/vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo site_url('assets/PopUp/vendor/perfect-scrollbar/perfect-scrollbar.css')?>" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="<?php echo site_url('assets/PopUp/css/theme.css')?>" rel="stylesheet" media="all">


</head>
<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon">
                            <img src="<?php echo site_url('assets/admin/images/logo-icon.png')?>" alt="homepage" class="dark-logo" />
                        </b>
                        <span class="logo-text">
                            <img src="<?php echo site_url('assets/admin/images/logo-text.png')?>" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                                <input type="text" class="form-control" placeholder="Search for..."> <a
                                    class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo site_url('assets/admin/images/users/1.jpg')?>" alt="user" class="profile-pic me-2">Markarn Doe
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="<?php echo site_url()?>Welcome/gestionTarif" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Gestion Tarif</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="<?php echo site_url()?>Welcome/addPlaceVehicule" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Ajout Place Voiture</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="<?php echo site_url()?>Welcome/TovalidationRecharge" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Validation portefeuille</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Parking Manager</h3>
                        <div class="d-flex align-items-center">
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
               
                <div class="row justify-content-center">
                    <?php for($i = 0 ; $i<count($place) ; $i++) { ?>
                            <!-- Column -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="card">
                                        <img class="card-img-top img-responsive" src="<?php echo site_url('assets/admin/images/images.jpg')?>" alt="Card">
                                        <div class="card-body">
                                            <ul class="list-inline d-flex align-items-center">
                                                <?php for($j = 0 ; $j <count($parking) ; $j++) { ?>
                                                    <?php if($parking[$j]['idPlace'] == $place[$i]['id']) {  ?>
                                                        <li class="ps-0" style="background-color:red;" >Occupied</li>
                                                        <form action="<?php echo site_url('Parking/RetirerVoiture')?>" method="post">
                                                            <input type="hidden" name="idParking" value="<?php echo $parking[$j]['id'] ?>">
                                                            <input type="hidden" name="dateDebut" value="<?php echo $parking[$j]['dateDebut'] ?>">
                                                            <li class="ms-auto"><input type="submit" class="btn btn-info mx-auto mx-md-0 text-white" value="Partir"></li>
                                                        </form>
                                                    <?php } ?>
                                                <?php } ?>
                                                <li class="ps-0" style="background-color:green;" >Aviable</li>
                                                <li class="ms-auto"><button type="button" class="btn btn-info mx-auto mx-md-0 text-white" data-toggle="modal" data-target="#<?php echo $place[$i]['id']?>"> Reserver </button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal large -->
                                <div class="modal fade" id="<?php echo $place[$i]['id']?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="largeModalLabel">Reserver Parking N-<?php echo $place[$i]['numero']?> </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo site_url('Parking/AjouterVoitureParking')?>" method="post">
                                                    User: </br> 
                                                        <input type="number"  name="iduser">
                                                        </br>
                                                    </br>
                                                    Matricule :  </br> <input type="text"  name="matricule">
                                                    </br>
                                                    </br>
                                                    <input type="hidden" name="idPlace" value="<?php echo $place[$i]['id']?>">
                                                    Tarif: </br> <input type="number"  name="idTarif">
                                                            <?php for($k = 0; $k<count($tarif) ; $k++) { ?>
                                                                <input type="hidden" name="montant" value="<?php echo $tarif[$k]['montant']?>">
                                                                <form action="<?php echo site_url('Parking/RetirerVoiture')?>" method="post">
                                                                    <input type="hidden" name="duree" value="<?php echo $tarif[$k]['durree']?>">
                                                                </form>
                                                            <?php } ?>  
                                                        </select>
                                                    </br>
                                                    </br>
                                                    <input type="submit" class="btn btn-primary" value="Payer"> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal large -->
                            <!-- Column -->
                    <?php } ?>
                </div>
            </div>
            <footer class="footer text-center">
                © 2021 Monster Admin by <a href="#">wrappixel.com</a>
            </footer>
        </div>
    </div>
    <script src="<?php echo site_url('assets/admin/plugins/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?php echo site_url('assets/admin/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?php echo site_url('assets/admin/js/app-style-switcher.js')?>"></script>
    <script src="<?php echo site_url('assets/admin/js/waves.js')?>"></script>
    <script src="<?php echo site_url('assets/admin/js/sidebarmenu.js')?>"></script>
    <script src="<?php echo site_url('assets/admin/js/custom.js')?>"></script>
    <script src="<?php echo site_url('assets/admin/plugins/flot/jquery.flot.js')?>"></script>
    <script src="<?php echo site_url('assets/admin/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js')?>"></script>
    <script src="<?php echo site_url('assets/admin/js/pages/dashboards/dashboard1.js')?>"></script>

    <!-- Jquery JS-->
	<script src="<?php echo site_url('assets/PopUp/vendor/jquery-3.2.1.min.js')?>"></script>
	<!-- Bootstrap JS-->
	<script src="<?php echo site_url('assets/PopUp/vendor/bootstrap-4.1/popper.min.js')?>"></script>
	<script src="<?php echo site_url('assets/PopUp/vendor/bootstrap-4.1/bootstrap.min.js')?>"></script>
	<!-- Vendor JS       -->
	<script src="<?php echo site_url('assets/PopUp/vendor/slick/slick.min.js')?>">
	</script>
	<script src="<?php echo site_url('assets/PopUp/vendor/wow/wow.min.js')?>"></script>
	<script src="<?php echo site_url('assets/PopUp/vendor/animsition/animsition.min.js')?>"></script>
	<script src="<?php echo site_url('assets/PopUp/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
	</script>
	<script src="<?php echo site_url('assets/PopUp/vendor/counter-up/jquery.waypoints.min.js')?>"></script>
	<script src="<?php echo site_url('assets/PopUp/vendor/counter-up/jquery.counterup.min.js')?>">
	</script>
	<script src="<?php echo site_url('assets/PopUp/vendor/circle-progress/circle-progress.min.js')?>"></script>
	<script src="<?php echo site_url('assets/PopUp/vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
	<script src="<?php echo site_url('assets/PopUp/vendor/chartjs/Chart.bundle.min.js')?>"></script>
	<script src="<?php echo site_url('assets/PopUp/vendor/select2/select2.min.js')?>">
	</script>

	<!-- Main JS-->
	<script src="js/main.js"></script>
</body>
</html>
<script type="text/javascript">
    var array = <?= $donne ?>;
    console.log(array[0]['qtt']);
    var tab = [];
    for (let i = 0; i < array.length; i++) {
        tab[i] = array[i]['quantite'];
    }
    var tablab = [];
    for (let i = 0; i < array.length; i++) {
        tablab[i] = array[i]['idProduits'];
    }

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Area Chart Example
    var ctx = document.getElementById("statRecette");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: tablab,
            datasets: [{
                label: "Sessions",
                lineTension: 1,
                backgroundColor: "rgba(2,117,216,0.2)",
                borderColor: "rgba(2,117,216,1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 50,
                pointBorderWidth: 2,
                data: tab,
            }],
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 50,
                        maxTicksLimit: 10
                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, .125)",
                    }
                }],
            },
            legend: {
                display: false
            }
        }
    });
</script>
