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
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo site_url('assets/admin/images/favicon.png')?>>
    <link href=<?php echo site_url('assets/admin/css/style.min.css')?> rel="stylesheet">

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
<script>
    actionMethod(event: any) {
    event.target.disabled = true;
}
</script>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon">
                            <img src=<?php echo site_url('assets/admin/images/logo-icon.png')?> alt="homepage" class="dark-logo" />
                        </b>
                        <span class="logo-text">
                            <img src=<?php echo site_url('assets/admin/images/logo-text.png')?> alt="homepage" class="dark-logo" />
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
                                <img src=<?php echo site_url('assets/admin/images/users/1.jpg')?> alt="user" class="profile-pic me-2">Markarn Doe
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Home</span></a></li>
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Gestion Tarif</h3>
                        <div class="d-flex align-items-center">
                           
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <button type="button"  class="btn btn-success d-none d-md-inline-block text-white" data-toggle="modal" data-target="#static"> Add Tarif </button>
                        </div>
                    </div>
                </div>
            </div>
             <!-- modal large -->
             <div class="modal fade" id="static" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="largeModalLabel">Ajouter tarif </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo site_url('Parking/AjouterTarif')?>" method="post">
                                                    Durree :  </br> <input type="time"  name="durree">
                                                    </br>
                                                    </br>
                                                    
                                                    Montant: </br> 
                                                        <input type="number" name="montant">
                                                    </br>
                                                    
                                                    Remarque: </br> 
                                                        <input type="text" name="remarque">
                                                    <input type="submit" class="btn btn-success" value="Ajouter"> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal large -->
            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">gestion Tarif</h4>
                              
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Durree</th>
                                                <th class="border-top-0">Montant</th>
                                                <th class="border-top-0"></th>
                                            </tr>
                                        </thead>
                                        <?php for($i = 0 ; $i<count($tarif) ; $i++ ) {?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $tarif[$i]['durree'] ?></td>
                                                    <td><?php echo $tarif[$i]['montant']  ?></td>
                                                    <td>
                                                        <form action="<?php echo site_url()?>Parking/RetirerTarif" method="post">
                                                            <input type="hidden" name="idTarif" value="<?php echo $tarif[$i]['id'] ?>">
                                                            <input type="submit" class="btn btn-success d-none d-md-inline-block text-white" value="Delete">
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center">
                © 2021 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
        </div>
    </div>
    <script src=<?php echo site_url('assets/admin/plugins/jquery/dist/jquery.min.js')?>></script>
    <script src=<?php echo site_url('assets/admin/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')?>></script>
    <script src=<?php echo site_url('assets/admin/js/app-style-switcher.js')?>></script>
    <script src=<?php echo site_url('assets/admin/js/waves.js')?>></script>
    <script src=<?php echo site_url('assets/admin/js/sidebarmenu.js')?>></script>
    <script src=<?php echo site_url('assets/admin/js/custom.js')?>></script>

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
</body>

</html>