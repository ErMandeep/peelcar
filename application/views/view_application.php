<!DOCTYPE html>
<html>
<head>
<?php include 'application/views/inc/top.inc.php'; ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
	<?php include 'application/views/inc/header.inc.php'; ?>
  
	<?php include 'application/views/inc/sidemenu.inc.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>View Applications</h1>      
    </section>
	
	<section class="breedcrumb_main">
	<ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class="active">View Applications</li>
    </ol>
	</section>
	

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
		<div class="box box-default">
			<div class="box-header with-border">
			  <h3 class="box-title">Date Range</h3>
			</div>
			<div class="box-body">
				<div class="row">
					<!-- ./col -->
					<div class="col-xs-6">
						<div class="form-group">
							<label>From:</label>

							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="datepicker" placeholder="Date Picker">
							</div>
						<!-- /.input group -->
						</div>
					</div>
					<!-- ./col -->
					<div class="col-xs-6">
						<div class="form-group">
							<label>To:</label>

							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="datepicker" placeholder="Date Picker">
							</div>
							<!-- /.input group -->
						</div>
					</div>
					<!-- ./col -->															
				</div>
				<!-- /.row -->
				
				<table id="example1" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example2_info">
                    



                    <thead>
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Controls: activate to sort column descending" aria-sort="ascending">Id.</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending">Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Firstname: activate to sort column ascending">  First Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Lastname: activate to sort column ascending"> Last Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">City</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Last Login IP: activate to sort column ascending">Zip/Country/State</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Last Login Date: activate to sort column ascending">  Home Phone</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="TOS: activate to sort column ascending">  Business Phone</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="TwoFactor: activate to sort column ascending">  Added by</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

foreach ($query->result_array() as $row)
{
       
?>

                        <tr>
                          
                  <td>
                    
<?php 
 echo $row['applicationsFirstname'];
        echo $row['applicationBody_Type'];
        echo $row['applicationColour'];


?>

                  </td>


                        </tr>
<?php } ?>
                    </tbody>

              </table>
				
			</div>
	</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; Peel Cars 2018. All Rights Reserved</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
</body>
</html>
