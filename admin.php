
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/demo/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jan 2021 19:39:35 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>ADMIN - SAHTI</title>
  <!--favicon-->
  <link rel="icon" href="back/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="back/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="back/css/bootstrap.min.css" rel="stylesheet"/>
  <!--Full Calendar Css-->
  <link href="back/plugins/fullcalendar/css/fullcalendar.min.css" rel='stylesheet'/>
  <!--Data Tables -->
  <link href="back/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="back/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- animate CSS-->
  <link href="back/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="back/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="back/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="back/css/app-style.css" rel="stylesheet"/>
  
  <script>
  var rdv = [];
  </script>
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
   <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="admin.php">
       <img src="back/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">SAHTI</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MENU</li>
      <li>
        <a target='_blank' href="index.php" class="waves-effect">
          <i class="icon-home"></i> <span>Home</span>
        </a>
      </li>
	  
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-briefcase"></i>
          <span>Patient</span> <i class="fa fa-users pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="admin.php?controller=patient&action=add"><i class="fa fa-circle-o"></i> Add Patient</a></li>
  		  <li><a href="admin.php?controller=patient&action=index"><i class="fa fa-circle-o"></i> List Patient</a></li>
        </ul>
      </li>
	  
	  
	   <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-briefcase"></i>
          <span>Spécialité</span> <i class="icon-layers pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="admin.php?controller=specialite&action=add"><i class="fa fa-circle-o"></i> Add specialite</a></li>
  		  <li><a href="admin.php?controller=specialite&action=index"><i class="fa fa-circle-o"></i> List specialite</a></li>
        </ul>
      </li>
	  
	  
	  <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-briefcase"></i>
          <span>RDV</span> <i class="icon-calendar pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="admin.php?controller=rdv&action=add"><i class="fa fa-circle-o"></i> Add RDV</a></li>
  		  <li><a href="admin.php?controller=rdv&action=index"><i class="fa fa-circle-o"></i> List RDV</a></li>
		  <li><a href="admin.php?controller=rdv&action=agenda"><i class="fa fa-circle-o"></i> AGENDA</a></li>
        </ul>
      </li>
	  
	  
    </ul>
	 
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top bg-white">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    
    
    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="back/images/avatars/avatar-17.jpg" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="back/images/avatars/avatar-17.jpg" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Seif Eddine Ammar</h6>
            <p class="user-subtitle">seifeddine.ammar@esprit.tn</p>
            </div>
           </div>
          </a>
        </li>
       
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
	
	
	  <?php
		include 'config/connexion.php';

		if (isset($_REQUEST['controller']))
			$controller=$_REQUEST['controller'];
		else
			$controller=null;

		if(isset($_REQUEST['action']))
			$action=$_REQUEST['action'];
		else
			$action=null;

		if($controller!=null)
			include 'controller/'.$controller.'_controller.php';

		?>
	
	
	
	
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 SAHTI Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="back/js/jquery.min.js"></script>
  <script src="back/js/popper.min.js"></script>
  <script src="back/js/bootstrap.min.js"></script>
	
	<!-- simplebar js -->
	<script src="back/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="back/js/waves.js"></script>
	<!-- sidebar-menu js -->
	<script src="back/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="back/js/app-script.js"></script>

  <!--Data Tables js-->
  <script src="back/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="back/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="back/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="back/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="back/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="back/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="back/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="back/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="back/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="back/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
	
	<!-- Full Calendar -->
  <script src='back/plugins/fullcalendar/js/moment.min.js'></script>
  <script src='back/plugins/fullcalendar/js/fullcalendar.min.js'></script>
  <script src="back/plugins/fullcalendar/js/fullcalendar-custom-script.js"></script>
  
</body>

<!-- Mirrored from codervent.com/rocker/demo/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jan 2021 19:39:43 GMT -->
</html>
