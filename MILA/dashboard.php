<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MILA - Bootstrap Admin Theme</title>

  <!-- Bootstrap Core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="assets/css/metisMenu.min.css" rel="stylesheet">

  <!-- Timeline CSS -->
  <link href="assets/css/timeline.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="assets/css/startmin.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="assets/css/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">MILA</a>
      </div>

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

     
      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
      
            <li>
              <a href="dashboard.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
              <a href="app/views/debit/read.php" class="active"><i class="fa fa-money" aria-hidden="true"></i> Data Debit Nasabah</a>
            </li>
            <li>
              <a href="logout.php" class="active"><i class="fa fa-arrow-left" aria-hidden="true"></i> Logout</a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>

    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"><marquee behavior="" direction="">Selamat Datang Di Data Debit Nasabah Bank SerbaGuna</marquee></h1>
          </div>
          <!-- /.col-lg-12 -->
        </div>
        
       
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="assets/js/metisMenu.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="assets/js/raphael.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="assets/js/startmin.js"></script>

</body>

</html>
