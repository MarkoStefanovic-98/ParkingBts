<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Parking</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet"> </head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top"> <a class="navbar-brand mr-1" href="<?=BASE_URL;?>/accueil">Parking Officiel</a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#"> <i class="fas fa-bars"></i> </button>
        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-user-circle fa-fw"></i> </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown"> <a class="dropdown-item" href="#">Paramètre</a>
                    <?php
                       if (isset($_SESSION['connecte']))
            {      
               echo '<div class="dropdown-divider"></div> <a class="dropdown-item" href="'.BASE_URL.'/disconnect" data-toggle="modal" data-target="#logoutModal">Déconnexion</a> </div>';
            }
            ?> </div>
            </li>
        </ul>
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <?php
                     
        if (isset($_SESSION['connecte']))
            { 
        echo' <li class="nav-item active">
          <a class="nav-link" href="'.BASE_URL.'/accueil">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Accueil</span>
          </a>
        </li>';
        
            }
        else
            
            {
             echo '<li class="nav-item">
                  <a class="nav-link" href="'.BASE_URL.'/login">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Connexion</span></a>
                </li>';
            }

            if (isset($_SESSION['connecte'])AND ($_SESSION['lvl'] == 3))
            {
                echo '<li class="nav-item">
                  <a class="nav-link" href="'.BASE_URL.'/admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Gestion-Admin</span></a>
                </li>';
            }
            elseif (isset($_SESSION['connecte'])AND ($_SESSION['lvl'] == 2))
            {
                echo '<li class="nav-item">
                  <a class="nav-link" href="'.BASE_URL.'/user?id_u='.($_SESSION['id_u']).'">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Gestion-User</span></a>
                </li>';
            }
            ?>
        </ul>
        <div id="content-wrapper">
            <div>
                <?php echo $content; ?>
            </div>
            <div class="container-fluid">
                <!-- Sticky Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto"> <span>Copyright © Marko STEFANOVIC 2018-2019</span> </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Prêt à vous déconnecter ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
                <div class="modal-body">Sélectionnez "Déconnexion" si vous êtes sûr de vouloir vous déconnecter. </div>
                <div class="modal-footer">
                    <?php 
                    
                        echo '<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> <a class="btn btn-primary" href="'.BASE_URL.'/disconnect">Déconnexion</a>'
                        
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>