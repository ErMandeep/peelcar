<!DOCTYPE html>
<html>
<head>
<?php include 'inc/top.inc.php'; ?>
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
	
	<?php include 'inc/header.inc.php'; ?>
	
	<?php include 'inc/sidemenu.inc.php'; ?>
	

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard</h1>      
    </section>
	
	<section class="breedcrumb_main">
	<ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
	</section>
	

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="fa fa-files-o" aria-hidden="true"></i></span>

				<div class="info-box-content info_content_new">
					<span class="info-box-text"><a href="#">Application History</a></span>
				</div>
				<!-- /.info-box-content -->
			</div>
		</div>
		<!-- ./col -->
        
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="ion ion-ios-gear-outline"></i></span>

				<div class="info-box-content info_content_new">
					<span class="info-box-text"><a href="#">Create New Application</a></span>
				</div>
				<!-- /.info-box-content -->
			</div>
		</div>
		<!-- ./col -->
		
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="ion ion-ios-gear-outline"></i></span>

				<div class="info-box-content info_content_new">
					<span class="info-box-text"><a href="#">Flyer Templates</a></span>
				</div>
				<!-- /.info-box-content -->
			</div>
		</div>
		<!-- ./col -->
		
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>

				<div class="info-box-content info_content_new">
					<span class="info-box-text"><a href="#">View Claims</a></span>
				</div>
				<!-- /.info-box-content -->
			</div>
		</div>
		<!-- ./col -->
        
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; Peel Cars 2018. All Rights Reserved</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
