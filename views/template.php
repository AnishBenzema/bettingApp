<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Betting System</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- <link rel="icon" href="views/img/template/poslogo.png"> -->

      <!-- CSS Plugins  -->

      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" href="views/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="views/dist/css/AdminLTE.css">
      <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
      <link rel="stylesheet" href="views/bower_components/bootstrap-daterangepicker/daterangepicker.css">
      <link rel="stylesheet" href="views/bower_components/morris.js/morris.css">
      <!-- javascript plugins  -->
      
      <!-- jQuery 3 -->
      <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- DataTables -->
      <script src="views/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="views/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <script src="views/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
      <script src="views/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
      <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
      <!-- AdminLTE App -->
      <script src="views/dist/js/adminlte.min.js"></script>
      <!-- Sweet alert Dialog-->
      <script src="views/plugins/sweetalert2/sweetalert2.all.js"></script>
      <!-- By default sweetalert2 doesn't support IE. To enable IE 11 support, include Promise polyfill -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
      <!-- InputMask datetime-->
      <script src="views/plugins/input-mask/jquery.inputmask.js"></script>
      <script src="views/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
      <script src="views/plugins/input-mask/jquery.inputmask.extensions.js"></script>
      <!-- jQueryNumber Plugin link -->
      <script src="views/plugins/jqueryNumber/jquerynumber.min.js"></script>
      <!-- DateRange Picker JS Plugins -->
      <script src="views/bower_components/moment/min/moment.min.js"></script>
      <script src="views/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
      <!-- Javascript plugins for Moris Charts & Bar charts-->
      <script src="views/bower_components/raphael/raphael.min.js"></script>
      <script src="views/bower_components/morris.js/morris.min.js"></script>
      <script src="views/bower_components/chart.js/Chart.min.js"></script>
   </head>
   <body class="hold-transition skin-blue sidebar-mini login-page">
      <?php
         echo 
           '<div class="wrapper">';
                // header component 
                include "modules/header.php"; 
                // sidebar component
                include "modules/sidebar.php";
                //body
               if(isset($_GET["route"]))
               {
                
                  if ($_GET["route"] == 'home' || $_GET["route"] == 'horseregistration'|| $_GET["route"] == 'horsebetting-info'||
                      $_GET["route"] == 'horsebets' || $_GET["route"] == 'create-betting' || $_GET["route"] == 'view-betting-info'||
                      $_GET["route"] == 'horsebetsRace1' || $_GET["route"] == 'horsebetsRace2'|| $_GET["route"] == 'horsebetsRace3' || $_GET["route"] == 'horsebetsRace4' || $_GET["route"] == 'horsebetsRace5' || $_GET["route"] == 'horsebetsRace6' || $_GET["route"] == 'horsebetsRace7' || $_GET["route"] == 'horsebetsRace8' || $_GET["route"] == 'horsebetsRace9' || $_GET["route"] == 'horsebetsRace10' )
                     {
                        include "modules/".$_GET["route"].".php";

                     }else{

                        include "modules/404.php";
                     }
                
               }else{
                
                        include "modules/home.php"; 
               }
                // footer
                include "modules/footer.php";
         echo '</div>';
        ?>
      <!-- Wrapper -->
      <script src="views/js/template.js"></script>
      <script src="views/js/clients.js"></script>
      <script src="views/js/betting.js"></script>
   </body>
</html>